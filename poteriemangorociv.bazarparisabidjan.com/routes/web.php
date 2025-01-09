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


Route::get('/', [ProductController::class, 'index']);

Route::get('/shop-grid', [ProductController::class, 'grid']);

Route::get('/shop-details', function () {
    return view('shop-details');
});

Route::get('/shoping-cart', function () {
    return view('shoping-cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/blog-details', function () {
    return view('checkout');
});


Route::get('/products', [ProductController::class, 'index']);
