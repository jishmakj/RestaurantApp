<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('User','UserController');
Route::resource('Floor','FloorController');
Route::resource('CardBalance','CardBalanceController');
Route::resource('CardDetails','CardDetailsController');
Route::resource('Categories','CategoriesController');
Route::resource('Extras','ExtrasController');
Route::resource('Item','ItemController');
Route::resource('Modifiers','ModifiersController');
Route::resource('Order','OrderController');
Route::resource('OrderItemDetails','OrderItemDetailsController');
Route::resource('OrderPlace','OrderPlaceController');
Route::resource('SubCategories','SubCategoriesController');