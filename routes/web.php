<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/master',function(){
    return view('layouts.master');
});

// Route::view('/products/create', 'products.create');
Route::get('/',[DashboardController::class,'index'])->name('dashboard');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products/store',[ProductController::class,'store'])->name('products.store');
Route::get('/products/index',[ProductController::class,'index'])->name('products.index');
Route::get('edit/{id}',[ProductController::class,'edit'])->name('edit');
Route::post('update/{id}',[ProductController::class,'update'])->name('update');
Route::get('delete/{id}',[ProductController::class,'delete'])->name('delete');
Route::get('product/detail/{id}',[ProductController::class,'detail'])->name('products.details');


Route::get('/order/index',[OrderController::class,'index'])->name('orders.index');
Route::get('/order/confirm/{id}',[OrderController::class,'confirm'])->name('orders.confirm');
Route::get('order/pending/{id}',[OrderController::class,'pending'])->name('orders.pending');
Route::get('order/pending/{id}',[OrderController::class,'show'])->name('orders.details');


Route::get('/user/details/{id}',[UserController::class,'detail'])->name('user.details');
Route::get('/user/index',[UserController::class,'show'])->name('users.index');


// Route::get('/user/index',[UserController::class,'show'])->name('user.index');

