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
//nested 
Route::get('Categories/{category}/items/','CategoriesController@item');
Route::get('SubCategories/{subcategory}/items/','SubCategoriesController@item');
Route::get('CardDetails/{carddet}/cardbalance/','CardDetailsController@cardbalance');
Route::get('Item/{item}/extras/','ItemController@extra');
Route::get('Master/{master}/locations/','MasterGroupController@location');
Route::get('Item/{item}/modifiers/','ItemController@modifier');
Route::get('Item/{item}/orders/','ItemController@order');
Route::get('Extras/{extra}/orders/','ExtrasController@order');
Route::get('Modifiers/{modifier}/orders/','ModifiersController@order');
Route::get('Location/{location}/orders/','LocationController@order');
Route::get('Order/{oredr}/orderitems/','OrderController@orderitem');
Route::get('Item/{item}/orderitems/','ItemController@orderitem');
Route::get('User/{user}/orderplaces/','UserController@orderplace');
Route::get('CardDetails/{card}/orderplaces/','CardDetailsController@orderplace');
Route::get('Categories/{category}/subcategories/','CategoriesController@subcategory');





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
Route::resource('Master','MasterGroupController');
Route::resource('Location','LocationController');