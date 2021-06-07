<?php

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
    return view('welcome');
});

// Route::get('/index/template', function () {
//     return view('template.index_template');
// });

// Route::get('/cart/template', function () {
//     return view('template.cart_template');
// });

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cart-1', function () {
    return view(('cart.cart-1'));
});

Route::get('/cart-2', function () {
    return view(('cart.cart-2'));
});

Route::get('/cart-3', function () {
    return view(('cart.cart-3'));
});

Route::get('/cart-4', function () {
    return view(('cart.cart-4'));
});








