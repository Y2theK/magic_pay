<?php

use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->name('admin.')->middleware('auth:admin_user')->group(function(){
    Route::get('/', [PageController::class,'home'])->name('home');

    Route::resource('users',UserController::class);
});