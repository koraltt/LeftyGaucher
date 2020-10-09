<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/admin/products', [ProductController::class,'handleAdmin'])->name('admin.route')->middleware('admin');
Route::get('/products/create', [ProductController::class,'create'])->name('products.create');
Route::get('/products/{id}', [ProductController::class,'show'])->name('products.show');
Route::post('/products', [ProductController::class,'store'])->name('products.store');
Route::delete('/products/{id}', [ProductController::class,'destroy'])->name('products.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
