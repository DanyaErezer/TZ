<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderControllers;
use App\Http\Controllers\ProductControllers;

Route::get('/', function () {
    return view('home');
});
Route::resource('products', ProductControllers::class)->except('show');
Route::resource('orders', OrderControllers::class)->only('index', 'create', 'store');
