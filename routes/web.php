<?php

use App\Http\Controllers\Fornt\CartController;
use App\Http\Controllers\Fornt\ForntController;
use App\Http\Controllers\Fornt\LoginController;
use App\Http\Controllers\Fornt\RegisterController;
use App\Http\Controllers\Fornt\UserProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function(){

// Route::get('/master',function(){
//     return view('layouts.master');
// });

// Route::view('/products/create', 'products.create');
// Route::get('/',[DashboardController::class,'index'])->name('dashboard');
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

Route::get('/Admin/profile',[UserController::class,'profile'])->name('Admin.profile');
Route::post('/Admin/profile/store',[UserController::class,'profile_store'])->name('Admin.profile.store');


// Route::get('/user/index',[UserController::class,'show'])->name('user.index');
});

//front
Route::get('/',[ForntController::class,'index']);

//cart
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/store',[CartController::class,'store'])->name('cart.store');


//Register
route::get('/user/register',[RegisterController::class,'register'])->name('user.register');
route::post('/user/store',[RegisterController::class,'store'])->name('user.store');

//login
route::get('/user/login',[LoginController::class,'login'])->name('user.login');
route::post('/user/login/store',[LoginController::class,'store'])->name('login.store');
route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');
route::get('/user/profile',[UserProfileController::class,'index'])->name('profile.index');

route::get('/user/profile/details',[UserProfileController::class,'show'])->name('profile.details');
route::get('/user/profile/edit',[UserProfileController::class,'edit'])->name('edit.profile');
