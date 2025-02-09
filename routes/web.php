<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/pollo', function () {
    return view('/admin/products/index');
});
Route::resource(('/products'),App\Http\Controllers\ProductController::class);
Route::resource(('/brands'),App\Http\Controllers\BrandController::class);
Route::resource(('/clients'),App\Http\Controllers\ClientController::class);
Route::resource(('/sales'),App\Http\Controllers\SaleController::class);
Route::resource(('/addresses'),App\Http\Controllers\AddressController::class);