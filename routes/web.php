<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('categories.index');
Route::post('/category', [HomeController::class, 'store'])->name('categories.store');
Route::get('/category/{category}', [HomeController::class, 'show'])->name('categories.show');
Route::post('/category/{id}', [HomeController::class, 'update'])->name('categories.update');
Route::delete('/category/{category}', [HomeController::class, 'destroy'])->name('categories.destroy');








