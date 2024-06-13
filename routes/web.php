<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ProductController::class, 'index']);

// Routes for Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/count', [CartController::class, 'count']);
