<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PayPalController;
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







/* 
Route::group(['middleware' => ['admin']], function () {

Route::get('/admin/products', [ProductController::class,'handleAdmin'])->name('admin.route')->middleware('admin');
Route::get('/products/create', [ProductController::class,'create'])->name('products.create')->middleware('admin');
}); */

<<<<<<< Updated upstream
=======
Route::get('/products/{id}', [ProductController::class,'show'])->name('products.show');
Route::get('/users/{id}', [UserController::class,'show'])->name('users.show');
>>>>>>> Stashed changes

Route::post('/products', [ProductController::class,'store'])->name('products.store')->middleware('admin');
Route::delete('/admin/destroy/{id}', [ProductController::class,'destroy'])->name('products.destroy')->middleware('admin');



Route::get('/products',[ProductController::class,'index'])->name('products');
Route::get('/category/{category}',[ProductController::class,'showCategory']);
Route::get('/admin', [ProductController::class,'handleAdmin'])->name('admin');

Route::get('/products/{id}', [ProductController::class,'show']);



//admin group

Route::group(['middleware' => ['admin']], function () {
Route::get('/products/modify/{id}', [ProductController::class,'adminDetails']);
Route::get('/admin', [ProductController::class,'handleAdmin'])->name('admin');
Route::post('/products/modify/{id}', [ProductController::class,'update']);
Route::post('/products/delete/{id}', [ProductController::class,'delete']);
Route::get('/admin/create', [ProductController::class,'create']);
Route::post('/products', [ProductController::class,'store']);
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* 
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add/{product}',  [CartController::class, 'add'])->name('cart.store');
Route::post('/update',  [CartController::class, 'update'])->name('cart.update');
Route::post('/remove',  [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear',  [CartController::class, 'clear'])->name('cart.clear'); */

//cart group

Route::get('/cart/add/{product}',  [CartController::class, 'add'])->name('cart.add')->middleware('auth');
Route::get('/cart/destroy/{itemId}',  [CartController::class, 'destroy'])->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemId}',  [CartController::class, 'update'])->name('cart.update')->middleware('auth');
Route::get('/cart',  [CartController::class, 'index'])->name('cart.index')->middleware('auth');
Route::get('/cart/checkout', [CartController::class,'checkout'])->name('cart.checkout')->middleware('auth');

Route::resource('orders', OrderController::class)->middleware('auth');

Route::get('paypal/checkout', [PayPalController::class,'getExpressCheckout'])->name('paypal.checkout');
Route::get('paypal/checkout-success', [PayPalController::class,'getExpressCheckoutSuccess'])->name('paypal.success');
Route::get('paypal/checkout-cancel', [PayPalController::class,'cancelPage'])->name('paypal.cancel');