<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products',[ProductController::class,'index'])->name('products');

Route::group(['middleware' => ['admin']], function () {
Route::get('/admin/products', [ProductController::class,'handleAdmin'])->name('admin.route')->middleware('admin');
Route::get('/products/create', [ProductController::class,'create'])->name('products.create')->middleware('admin');
});

Route::get('/products/{id}', [ProductController::class,'show'])->name('products.show');

Route::group(['middleware' => ['auth']], function () {
Route::get('/users/{name}', [UserController::class,'show'])->name('users.show')->middleware('auth');
Route::get('/address/create', [AddressController::class,'create'])->name('addresses.create')->middleware('auth');
Route::post('/address', [AddressController::class,'store'])->name('address.store')->middleware('auth');
});

Route::group(['middleware' => ['admin']], function () {
Route::post('/products', [ProductController::class,'store'])->name('products.store')->middleware('admin');
Route::delete('/products/{id}', [ProductController::class,'destroy'])->name('products.destroy')->middleware('admin');
Route::get('/category/{category}',[ProductController::class,'showCategory']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
