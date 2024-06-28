<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IncomeCategoryController;
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
    // Income Category CRUD
    Route::get('/category', [IncomeCategoryController::class, 'index'])->name('tbl_income_category.index');
    Route::post('/category', [IncomeCategoryController::class, 'store'])->name('tbl_income_category.store');
    Route::get('/edit-category/{id}', [IncomeCategoryController::class, 'edit'])->name('tbl_income_category.edit');
    Route::put('/update-category', [IncomeCategoryController::class, 'update'])->name('tbl_income_category.update');
    Route::get('/delete-category/{id}', [IncomeCategoryController::class, 'delete'])->name('tbl_income_category.delete');
});


Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticationController::class, 'destroy'])->name('logout');
});


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard.dashboard');
});
