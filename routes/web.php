<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::view('/', 'home')
    ->name('home');

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/product', [ProductController::class, 'store'])->name('products.store');

Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
Route::patch('/product/update/{product}', [ProductController::class, 'update'])->name('products.update');