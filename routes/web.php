<?php

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


Route::get('/front', function () {
    return view('front');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/products', 'HomeController@products')->name('products');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/details/{id}', 'HomeController@details')->name('details');

Route::get('/cart', 'HomeController@cart')->name('cart');

Route::get('/add-to-cart/{id}','HomeController@getAddToCart')->name('addToCart');

Route::get('/remove/{id}','HomeController@getDelete')->name('remove');

Route::get('/more/{id}','HomeController@getMore')->name('more');


Route::prefix('admin')->group(function (){

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/index','AdminController@show')->name('admin.index');

    Route::get('/customer', 'AdminController@customer')->name('customer.index');

    Route::resource('/products', 'ProductController');

});



