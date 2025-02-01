<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
 
Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');



Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::resource('shoppingcart', CartController::class);
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);

Route::post('/cart/items/{itemId}', [CartItemController::class, 'removeFromCart'])
     ->name('cart.remove');
