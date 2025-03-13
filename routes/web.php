<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderControllers;
use App\Http\Controllers\ProductControllers;

Route::get('/', function () {
    return view('home');
});
Route::resource('products', ProductControllers::class);
Route::resource('orders', OrderControllers::class);
Route::put('/orders/{order}/complete', [OrderControllers::class, 'complete'])->name('orders.complete');
