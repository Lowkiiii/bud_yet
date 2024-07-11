<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ActTransactionController;
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
    Route::get('/schedule', [UserController::class, 'schedule'])->name('schedule.schedule');
    Route::get('/income', [UserController::class, 'income'])->name('income.income');
    Route::get('/transaction', [UserController::class, 'transaction'])->name('transaction.transaction');
});


Route::middleware('auth')->group(function () {
    // Income
    Route::get('/income', [IncomeController::class, 'index'])->name('income.income');
    Route::post('/income', [IncomeController::class, 'store'])->name('income.store');
    Route::get('/edit-income/{id}', [IncomeController::class, 'edit'])->name('income.edit');
    Route::put('/update-income', [IncomeController::class, 'update'])->name('income.update');
    Route::get('/delete-income/{id}', [IncomeController::class, 'delete'])->name('income.delete');

    // Account
    Route::post('/accounts', [AccountsController::class, 'store'])->name('account.store');
    Route::get('/accounts', [AccountsController::class, 'index'])->name('accounts.accounts');

    Route::get('/edit-accounts/{id}', [AccountsController::class, 'edit'])->name('accounts.edit');
    Route::put('/update-accounts', [AccountsController::class, 'update'])->name('accounts.update');
    Route::get('/delete-accounts/{id}', [AccountsController::class, 'delete'])->name('accounts.delete');

    //Get Accounts
    Route::get('/transaction', [ActTransactionController::class, 'getAccount'])->name('transaction.transaction');
    //store transaction
    Route::post('/transaction', [ActTransactionController::class, 'store'])->name('transaction.store');
});
