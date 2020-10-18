<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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







/* 
Route::group(['middleware' => ['admin']], function () {

Route::get('/admin/products', [ProductController::class,'handleAdmin'])->name('admin.route')->middleware('admin');
Route::get('/products/create', [ProductController::class,'create'])->name('products.create')->middleware('admin');
}); */

/* Route::get('/products/{id}', [ProductController::class,'show'])->name('products.show');
 */
/* Route::group(['middleware' => ['admin']], function () {
Route::post('/products', [ProductController::class,'store'])->name('products.store')->middleware('admin');
Route::delete('/admin/destroy/{id}', [ProductController::class,'destroy'])->name('products.destroy')->middleware('admin');

}); */

Route::get('/products',[ProductController::class,'index'])->name('products');
Route::get('/category/{category}',[ProductController::class,'showCategory']);
Route::get('/admin', [ProductController::class,'handleAdmin'])->name('admin');

Route::get('/products/{id}', [ProductController::class,'show']);


Route::get('/products/modify/{id}', [ProductController::class,'adminDetails']);
Route::post('/products/modify/{id}', [ProductController::class,'update']);
Route::post('/products/delete/{id}', [ProductController::class,'delete']);







Route::get('/admin/create', [ProductController::class,'create']);
Route::post('/products', [ProductController::class,'store']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* 
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add/{product}',  [CartController::class, 'add'])->name('cart.store');
Route::post('/update',  [CartController::class, 'update'])->name('cart.update');
Route::post('/remove',  [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear',  [CartController::class, 'clear'])->name('cart.clear'); */



Route::get('/cart/add/{product}',  [CartController::class, 'add'])->name('cart.add')->middleware('auth');
Route::get('/cart/destroy/{itemId}',  [CartController::class, 'destroy'])->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemId}',  [CartController::class, 'update'])->name('cart.update')->middleware('auth');
Route::get('/cart',  [CartController::class, 'index'])->name('cart.index')->middleware('auth');