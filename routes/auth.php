<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ActTransactionController;
use App\Http\Controllers\ScheduleController;
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
    Route::put('/income/{id}', [IncomeController::class, 'update'])->name('income.update');
    Route::delete('/income/{id}', [IncomeController::class, 'destroy'])->name('income.destroy');

    // Account
    Route::post('/accounts', [AccountsController::class, 'store'])->name('account.store');
    Route::get('/accounts', [AccountsController::class, 'index'])->name('accounts.accounts');
    Route::get('/accounts/{id}/edit', [AccountsController::class, 'edit'])->name('accounts.edit');
    Route::put('/accounts/{id}', [AccountsController::class, 'update'])->name('accounts.update');
    Route::delete('/accounts/{id}', [AccountsController::class, 'destroy'])->name('accounts.destroy');

    //Get Accounts for Option in Account Transaction
    Route::get('/transaction/accounts', [ActTransactionController::class, 'getAccount'])->name('transaction.transaction');

    //get Account Transaction
    Route::get('/transaction', [ActTransactionController::class, 'index'])->name('transaction.index');

    //store transaction
    Route::post('/transaction', [ActTransactionController::class, 'store'])->name('transaction.store');
    Route::get('/dashboard', [ActTransactionController::class, 'dashboard'])->name('dashboard.dashboard');   // dashboard transaction list

    //Schedule
    Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule.schedule');
    Route::post('/schedule', [ScheduleController::class, 'store'])->name('schedule.store');
    Route::put('/schedule/{id}', [ScheduleController::class, 'update'])->name('schedule.update');
    Route::delete('/schedule/{id}', [ScheduleController::class, 'destroy'])->name('schedule.destroy');
   
    
    Route::resource('account', AccountsController::class);

});
