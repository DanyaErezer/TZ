<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderControllers;
use App\Http\Controllers\ProductControllers;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductControllers::class);
Route::resource('orders', OrderControllers::class);
