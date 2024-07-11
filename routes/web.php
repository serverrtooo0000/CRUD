<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\PasswordController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/category', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::post('/category/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


Route::get('/admin_password', [PasswordController::class, 'adminPass'])->name('categories.admin');
Route::post('/admin_pass_enter', [PasswordController::class, 'admPas'])->name('categories.admin.pas');
