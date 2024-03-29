<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use App\Models\Transaction;

class PageController extends Controller
{
    public function home(){
        
        $bankBalance = Wallet::sum('amount');
        $totalUsers = User::count('id');
        $totalAdminUsers = AdminUser::count('id');
        $totalTransactions = Transaction::count('id');

        return view('backend.home',compact('bankBalance','totalUsers','totalAdminUsers','totalTransactions'));
    }
}
