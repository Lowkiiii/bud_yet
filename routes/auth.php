<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IncomeController;
use Illuminate\Support\Facades\Route;

//use Illuminate\Foundation\Auth\EmailVerificationRequest;

//Auth::routes(['verify' => true]);

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticationController::class, 'index']);
    Route::post('login', [AuthenticationController::class, 'login'])->name('login');
    Route::get('register', [RegisterController::class, 'index']);
    Route::post('register', [RegisterController::class, 'register'])->name('register.account');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticationController::class, 'destroy'])->name('logout'); 
});
 
Route::middleware('auth')->group(function () {
    Route::get('/accounts', [UserController::class, 'accounts'])->name('accounts.accounts');
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard.dashboard');
});

Route::middleware('auth')->group(function () {
    // Academics routes
    Route::post('/accounts', [IncomeController::class, 'store'])->name('income.store');
});


