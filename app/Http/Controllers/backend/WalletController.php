<?php

namespace App\Http\Controllers\backend;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class WalletController extends Controller
{
    public function index()
    {
        return view('backend.wallet.index');
    }
    public function getWallets()
    {
        $wallets = Wallet::query();

        return DataTables::of($wallets)
        ->addColumn('account_person', function ($row) {
            $user = $row->user;
            if($user) {
                $htmlTable = '<table class="">
            <tr ><th>Name</th><td class="text-yellow-500">' . $user->name . '</td></tr>
            <tr><th>Email</th><td class="text-green-500">' . $user->email . '</td></tr>
            <tr><th>Phone</th><td class="text-red-500">' . $user->phone . '</td></tr>
            </table>';

                return $htmlTable;
            }
            return '-';

        })
        ->editColumn('amount', function ($row) {
            return number_format($row->amount,2);
        })
        ->editColumn('created_at', function ($row) {
            return 'Since ' . $row->created_at->format('Y, M d'); // Customize the date format as needed
        })
        ->editColumn('updated_at', function ($row) {
            return $row->updated_at->format('Y, M d h:m:s a'); // Customize the date format as needed
        })
        ->rawColumns(['account_person'])
        ->make(true);
    }
}
