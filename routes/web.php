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
    return view('home');
});

Route::View('/home', 'home');

Route::View('/medicine', 'medicine');

Route::View('/ordersuccess', 'ordersuccess');

Route::View('/orders', 'vieworder');

Route::View('/adminhome', 'adminhome');

Route::View('/dashboard', 'dashboard');

Route::View('/viewmedicines', 'viewmedicines');

Route::View('/addmedicine', 'addmedicine');

Route::View('/customerorders', 'adminorders');

Route::post('/adminhome', 'App\Http\Controllers\Admin@authenticate');

Route::get('/addmedicine','App\http\controllers\MedicineController@index');

Route::post('/addmedicine','App\Http\controllers\MedicineController@store');

Route::get('/viewmedicines/show', 'App\Http\Controllers\MedicineController@show');

Route::get('/medicine/delete/{id}', 'App\Http\Controllers\MedicineController@destroy');

Route::get('/medicine/edit/{id}', 'App\Http\Controllers\MedicineController@edit');

Route::post('/medicine/update/{id}','App\Http\Controllers\MedicineController@update');

Route::get('/viewmedicines', 'App\Http\Controllers\MedicineController@show');

Route::post('/showmeds','App\Http\Controllers\MedicineController@showmed');

Route::get('/addcart/{id}', 'App\Http\Controllers\CartController@store');

Route::get('/cart', 'App\Http\Controllers\CartController@show');

Route::get('/cart/delete/{id}', 'App\Http\Controllers\CartController@destroy');

Route::get('/order/proceed/{total}', 'App\Http\Controllers\CartController@proceedorder');

Route::post('/confirmorder/{total}','App\Http\Controllers\OrderController@store');

Route::post('/vieworders','App\Http\Controllers\OrderController@find');

Route::get('/customerorders', 'App\Http\Controllers\OrderController@show');



