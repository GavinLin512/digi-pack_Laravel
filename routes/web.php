<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
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
Route::prefix('/index')->group(function () {
    Route::get('/', 'FrontController@index');
    Route::get('/login', 'FrontController@login');
});

Route::prefix('/product')->group(function () {
    Route::get('/', 'FrontController@productIndex');

});

Route::prefix('/cart')->group(function () {
    Route::get('/step-1', 'FrontController@cart_step_1');
    Route::middleware(['shopping'])->group(function () {
        Route::get('/step-2', 'FrontController@cart_step_2');
        Route::post('/step-2/check', 'FrontController@paymentCheck');
        Route::get('/step-3', 'FrontController@cart_step_3');
        Route::post('/step-3/check', 'FrontController@shipmentCheck');
    });
    Route::get('/step-4', 'FrontController@cart_step_4');

    // shopping cart
    Route::post('/add', 'FrontController@add');
    Route::post('/update', 'FrontController@update');
    Route::post('delete', 'FrontController@delete');
    Route::get('/content', 'FrontController@content');
    Route::get('/clear', 'FrontController@clear');
});






Auth::routes();





Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->group(function () {
    Route::prefix('/product')->group(function () {

        Route::prefix('/category')->group(function () {
            Route::get('/', 'ProductCategoryController@index');
            Route::get('/create', 'ProductCategoryController@create');
            Route::post('/store', 'ProductCategoryController@store');
            Route::get('/edit/{id}', 'ProductCategoryController@edit');
            Route::post('/update/{id}', 'ProductCategoryController@update');
            Route::delete('/delete/{id}', 'ProductCategoryController@delete');
        });

        Route::prefix('/item')->group(function () {
            Route::get('/', 'ProductController@index');
            Route::get('/create', 'ProductController@create');
            Route::post('/store', 'ProductController@store');
            Route::get('/edit/{id}', 'ProductController@edit');
            Route::post('/update/{id}', 'ProductController@update');
            Route::delete('/delete/{id}', 'ProductController@delete');
            Route::post('/deleteImage', 'ProductController@deleteImage');
        });
    });
});
