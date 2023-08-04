<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\UUIDGenerater;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\frontend\TransferConfirmRequest;
use App\Models\Transaction;

class PageController extends Controller
{
    public function home(){
        $user = Auth()->user();
        return view('frontend.home',compact('user'));
    }
    public function profile(){
        $user = Auth::user();
        return view('frontend.profile',compact('user'));
    }
    public function updatePasswordCreate(){
        return view('frontend.update_password');

    }
    public function updatePasswordStore(Request $request){

        $request->validate([
            'old_password' => 'required',
            'new_password' => ['required',Rules\Password::defaults()]
        ]);
        $user = Auth()->user();

        if(Hash::check($request->old_password,$user->password)){
            $user->password = Hash::make($request->new_password);
            $user->update();

            return redirect()->route('profile')->with(['updated' => 'Password Updated.']);
        }
        return redirect()->back()->withErrors(['old_password' => 'Old Password is not correct']);


    }
    public function wallet(){
        $user = Auth()->user();
        return view('frontend.wallet',compact('user'));
    }
    public function transaction(){
        $user = Auth()->user();
        $transactions =  Transaction::where('user_id',$user->id)->latest()->get();
        return view('frontend.transaction',compact('user','transactions'));
    }
    public function transactionDetail($trx_id){
        $user = Auth()->user();
        $transaction = Transaction::where('user_id',$user->id)->where('trx_id',$trx_id)->firstOrFail();
        // dd(request()->route());
        return view('frontend.transaction_detail',compact('user','transaction'));
    }
    public function transfer(){
        $user = Auth()->user();
        // dd(request()->route());
        return view('frontend.transfer',compact('user'));
    }
    public function transferConfirm(TransferConfirmRequest $request){
        $str = $request->to_phone.$request->amount.$request->description;
        $hash_value = hash_hmac('sha256', $str, 'magic_pay');

        if($hash_value !== $request->hash_value){
            return redirect()->back()->withErrors(['fail' => 'The given data is invalid.'])->withInput();
        }
        $from_account_user = Auth()->user();
        $to_account_user = User::where('phone',$request->to_phone)->first();

        $to_phone = $request->to_phone;
        $amount = $request->amount;
        $description = $request->description;

        return view('frontend.transfer_confirm',compact('from_account_user','to_account_user','amount','description'));
    }
    public function transferComplete(TransferConfirmRequest $request,Exception $exception){
       
        $to_phone = $request->to_phone;
        $amount = $request->amount;
        $description = $request->description;

        $str = $to_phone . $amount . $description;
        $hash_value = hash_hmac('sha256', $str, 'magic_pay');

        if($hash_value !== $request->hash_value){
            return redirect()->back()->withErrors(['fail' => 'The given data is invalid.'])->withInput();
        }

        $from_account_user = Auth()->user();
        $to_account_user = User::where('phone',$request->to_phone)->first();

        if(!$to_account_user){
            return redirect()->route('transfer')->withErrors('to_phone','Invalid Account');
        }
        if($from_account_user->phone == $to_phone){
           return redirect()->route('transfer')->withErrors('to_phone','Invalid Phone Number');
        }
        if($from_account_user->wallet->amount < $request->amount){
            return redirect()->route('transfer')->withErrors('amount','Insuffient Balance');
         }
        if(!$from_account_user->wallet || !$to_account_user->wallet){
            return redirect()->route('transfer')->withErrors('to_phone','Invalid Account');
        }

        DB::beginTransaction();

        try {

            $from_account_wallet = $from_account_user->wallet;
            $from_account_wallet->decrement('amount',$amount);
            $from_account_wallet->save();
            
            $to_account_wallet = $to_account_user->wallet;
            $to_account_wallet->increment('amount',$amount);
            $to_account_wallet->save();

            $ref_no = UUIDGenerater::refNo();
            $from_account_transaction = new Transaction();
            $from_account_transaction->ref_no = $ref_no;
            $from_account_transaction->trx_id = UUIDGenerater::trxID();
            $from_account_transaction->user_id = $from_account_user->id;
            $from_account_transaction->source_id = $to_account_user->id;
            $from_account_transaction->type = 2;  //expense
            $from_account_transaction->amount = $amount;
            $from_account_transaction->description = $description;
            $from_account_transaction->save();

            $to_account_transaction = new Transaction();
            $to_account_transaction->ref_no = $ref_no;
            $to_account_transaction->trx_id = UUIDGenerater::trxID();
            $to_account_transaction->user_id = $to_account_user->id;
            $to_account_transaction->source_id = $from_account_user->id;
            $to_account_transaction->type = 1;  //income
            $to_account_transaction->amount = $amount;
            $to_account_transaction->description = $description;
            $to_account_transaction->save();

            DB::commit();

            return redirect()->route('home')->with('created','Successfully Transferred');

        } catch (\Throwable $e) {
           DB::rollBack();
           return redirect()->back()->withErrors('failed','Something wrong.')->withInput();
        }

        

        // return view('frontend.transfer_complete',compact('from_account_user','to_account_user','amount','description'));
    }
    public function passwordCheck(Request $request){
        if(Hash::check($request->password,auth()->user()->password)){
            return response()->json([
                'status' => 'success'
            ]);
        }
        return response()->json([
            'status' => 'fail',
        ]);
    }
    public function hashTransfer(Request $request){
        $str = $request->to_phone . $request->amount . $request->description;
        $hash_value = hash_hmac('sha256', $str, 'magic_pay');
        return response()->json([
            'status' => 'success',
            'data' => $hash_value
        ]);
    }
    public function toAccountVerify(Request $request){
        $user = User::where('phone',$request->phone)->first();
        if(auth()->user()->phone != $request->phone){
            if($user){
                return response()->json([
                    'status' => 'success',
                    'data' => $user
                ]);
            }
        }
            return response()->json([
                'status' => 'fail',
                'message' => 'Invalid Phone Number.'
        ]);
        
    }
}
