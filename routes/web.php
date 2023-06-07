<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartlistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/check-if-added', function () {
    return view('check-if-added');
});

Route::get('/common', function () {
    return view('common');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/artisan', function () {
    return view('artisan');
});


Route::get('/cart-remove', function () {
    return view('cart-remove');
});

Route::get('/cart', function () {
    return view('cart');
});


Route::get('/logout', function () {
    return view('logout');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/products2', function () {
    return view('products2');
});


Route::get('/sucesss', function () {
    return view('sucesss');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/index3', function () {
    return view('index3');
});

Route::get('/index4', function () {
    return view('index4');
});

Route::get('/index5', function () {
    return view('index5');
});


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/wishlist', [WishlistController::class, 'index']);
Route::post('/wishlistAdd', [WishlistController::class, 'store']);
Route::post('/wishlistDel', [WishlistController::class, 'destroy']);
Route::post('/wishlistToCart', [WishlistController::class, 'wishtocart']);

Route::get('/cartlist', [CartlistController::class, 'index']);
Route::post('/cartlistAdd', [CartlistController::class, 'store']);
Route::post('/cartlistDel', [CartlistController::class, 'destroy']);
Route::post('/cartlistToCart', [CartlistController::class, 'carttocart']);

