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

Route::resource('/contribuyentes', 'ContribuyenteController');
Route::resource('/paybills', 'PayBillsController');
Route::resource('/discounts', 'DiscountController');
Route::get("delete/{id}","PayBillsController@destroy");
Route::get("/discounts/delete/{id}","DiscountController@destroy");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
