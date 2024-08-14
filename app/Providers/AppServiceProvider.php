<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Models\Account;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // View::composer(['*'], function ($view) {
        //     if (Auth::check()) {
        //         $accounts = Account::where('user_id', Auth::id())->get();
        //         $view->with('accounts', $accounts);
        //     }
        // });
    }
}
