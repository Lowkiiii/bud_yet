<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeCategoryController;

Route::get('/', function () {
    return view('welcome');
});


// Income Category CRUD
Route::get('/category', [IncomeCategoryController::class, 'index'])->name('tbl_income_category.index');
Route::post('/category', [IncomeCategoryController::class, 'store'])->name('tbl_income_category.store');
Route::get('/edit-category/{id}', [IncomeCategoryController::class, 'edit'])->name('tbl_income_category.edit');
Route::put('/update-category', [IncomeCategoryController::class, 'update'])->name('tbl_income_category.update');
Route::get('/delete-category/{id}', [IncomeCategoryController::class, 'delete'])->name('tbl_income_category.delete');
