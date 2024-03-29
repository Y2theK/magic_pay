<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontend/*', function ($view) {
            $unread_noti_count = 0;
            if(auth()->check()){
                $unread_noti_count = auth()->user()->unreadNotifications->count();
            }
            $view->with('unread_noti_count', $unread_noti_count);
        });
    }
}
