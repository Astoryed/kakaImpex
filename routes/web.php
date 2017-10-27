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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/products', 'HomeController@products')->name('products');

Route::get('/feedback', 'HomeController@feedback')->name('feedback');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/details/{id}', 'HomeController@details')->name('details');

Route::get('/printing', 'CheckoutController@printing')->name('printing');

Route::get('/embroidery', 'CheckoutController@embroidery')->name('embroidery');
Route::get('/digital', 'CheckoutController@digital')->name('digital');
Route::get('/screen', 'CheckoutController@screen')->name('screen');
Route::get('/offset', 'CheckoutController@offset')->name('offset');
Route::get('/customize', 'CheckoutController@customize')->name('customize');
Route::get('/promotional', 'CheckoutController@promotional')->name('promotional');
Route::get('/acrylic', 'CheckoutController@acrylic')->name('acrylic');

Route::get('/cart', 'HomeController@cart')->name('cart');

Route::post('/add-to-cart/{id}','HomeController@getAddToCart')->name('addToCart');

Route::get('/remove/{id}','HomeController@getDelete')->name('remove');

Route::get('/more/{id}','HomeController@getMore')->name('more');

Route::get('/deleteCart','HomeController@deleteCart')->name('deleteCart');

Route::resource('/checkout','CheckoutController');

Route::get('/orderPage', 'CustomerController@orderPage')->name('orderPage');

Route::get('/orderSubmit', 'HomeController@orderSubmit')->name('orderSubmit');

Route::get('/sendMail', 'HomeController@sendMail')->name('sendMail');

Route::get('/poster',function (Request $request){

    $size = $request->get('size_btn');

    echo $size;

});

Route::get('/warmupJackets', 'HomeController@warmupJackets')->name('warmupJackets');

Route::get('/warmupTrousers', 'HomeController@warmupTrousers')->name('warmupTrousers');

Route::get('/warmupSuits', 'HomeController@warmupSuits')->name('warmupSuits');

Route::get('/sleeveless', 'HomeController@sleeveless')->name('sleeveless');

Route::get('/shortSleeves', 'HomeController@shortSleeves')->name('shortSleeves');

Route::get('/longSleeves', 'HomeController@longSleeves')->name('longSleeves');

Route::get('/soccer', 'HomeController@soccer')->name('soccer');

Route::get('/shorts', 'HomeController@shorts')->name('shorts');

Route::get('/sublimation', 'HomeController@sublimation')->name('sublimation');

Route::get('/rain', 'HomeController@rain')->name('rain');

Route::get('/pullover', 'HomeController@pullover')->name('pullover');

Route::get('/baseballGloves', 'HomeController@baseballGloves')->name('baseballGloves');

Route::get('/bibs', 'HomeController@bibs')->name('bibs');

Route::get('/hoodedJackets', 'HomeController@hoodedJackets')->name('hoodedJackets');

Route::get('/sweatShirts', 'HomeController@sweatShirts')->name('sweatShirts');

Route::get('/backpack', 'HomeController@backpack')->name('backpack');

Route::get('/cyclingGloves', 'HomeController@cyclingGloves')->name('cyclingGloves');

Route::get('/baseballJerseys', 'HomeController@baseballJerseys')->name('baseballJerseys');

Route::get('/poloUmpireShirts', 'HomeController@poloUmpireShirts')->name('poloUmpireShirts');

Route::get('/baseballPants', 'HomeController@baseballPants')->name('baseballPants');

Route::get('/cyclingJerseys', 'HomeController@cyclingJerseys')->name('cyclingJerseys');

Route::get('/leatherProducts', 'HomeController@leatherProducts')->name('leatherProducts');

Route::get('/leatherMen', 'HomeController@leatherMen')->name('leatherMen');

Route::get('/leatherWomen', 'HomeController@leatherWomen')->name('leatherWomen');

Route::get('/bikersJacket', 'HomeController@bikersJacket')->name('bikersJacket');

Route::get('/racingSuit', 'HomeController@racingSuit')->name('racingSuit');

Route::get('/newArrivals', 'HomeController@newArrivals')->name('newArrivals');

Route::get('/sendMail', 'HomeController@sendMail')->name('sendMail');


Route::prefix('admin')->group(function (){

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/index','AdminController@show')->name('admin.index');

    Route::resource('/customer', 'CustomerController');

    Route::resource('/products', 'ProductController');

    Route::get('/order', 'AdminController@order')->name('orderlist');

    Route::get('/inquiry/{id}','CheckoutController@inquiry')->name('inquiry');


});



