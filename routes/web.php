<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;


//client
//Route::get('/', function () { return view('Client.index');})->name('inicio');
Route::get('/', [App\Http\Controllers\ClientController::class,'index'])->name('inicio');
Route::resource(('/products'),App\Http\Controllers\ProductController::class);


route::middleware(['auth'])->group(function(){
    Route::resource(('/services'),App\Http\Controllers\ServiceController::class);

});


//login
route::get('register',[App\Http\Controllers\Auth\RegisterController::class,'show'])->name('register');
route::post('register',[App\Http\Controllers\Auth\RegisterController::class,'handle'])->name('register.handle');

route::get('login',[App\Http\Controllers\Auth\LoginController::class,'show'])->name('login');
route::post('login',[App\Http\Controllers\Auth\LoginController::class,'handle'])->name('login.handle');

route::post('logout',[App\Http\Controllers\Auth\LogoutController::class,'handle'])->name('logout');


//admin

route::middleware(['auth'])->group(function(){
    Route::get('/admin', function () { return view('Admin.index');})->middleware('role:admin')->name('admin');

    Route::resource(('suppliers'),App\Http\Controllers\SupplierController::class)->middleware('role:admin');

});

