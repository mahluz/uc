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

Route::get('/', 'MainController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('about','MainController@about')->name('about');
Route::get('contact','MainController@contact')->name('contact');

Route::get('/test','TestController@index');

Route::group(['middleware'=>'firstSecurity:1'],function(){

	Route::get('admin','AdminController@index');
	Route::group(['prefix'=>'admin'],function(){

		Route::get('user','UserController@index');
		Route::group(['prefix'=>'user'],function(){
			Route::post('delete','UserController@delete');
			Route::get('create','UserController@create');
			Route::post('store','UserController@store');
			Route::post('edit','UserController@edit');
			Route::post('update','UserController@update');
		});

		Route::get('food','FoodController@index');
		Route::group(['prefix'=>'food'],function(){

			Route::get('create','FoodController@create');
			Route::post('store','FoodController@store');
			Route::post('delete','FoodController@delete');

		});
		// end food group

		Route::get('drink','DrinkController@index');
		Route::group(['prefix'=>'drink'],function(){
			Route::get('create','DrinkController@create');
			Route::post('store','DrinkController@store');
			Route::post('delete','DrinkController@delete');
		});
		// end drink grup

	});
	// end admin group

});
// end first security

