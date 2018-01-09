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
			Route::post('edit','FoodController@edit');
			Route::post('update','FoodController@update');
			Route::post('delete','FoodController@delete');

		});
		// end food group

		Route::get('drink','DrinkController@index');
		Route::group(['prefix'=>'drink'],function(){
			Route::get('create','DrinkController@create');
			Route::post('store','DrinkController@store');
			Route::post('edit','DrinkController@edit');
			Route::post('update','DrinkController@update');
			Route::post('delete','DrinkController@delete');
		});
		// end drink grup

		Route::get('dessert','DessertController@index');
		Route::group(['prefix'=>'dessert'],function(){
			Route::get('create','DessertController@create');
			Route::post('store','DessertController@store');
			Route::post('edit','DessertController@edit');
			Route::post('update','DessertController@update');
			Route::post('delete','DessertController@delete');
		});

		Route::get('promotion','PromotionController@index')->name('promotion');
		Route::group(['prefix'=>'promotion'],function(){
			Route::get('create','PromotionController@create');
			Route::post('store','PromotionController@store');
			Route::post('edit','PromotionController@edit');
			Route::post('update','PromotionController@update');
			Route::post('delete','PromotionController@delete');
		});
		// end promotion grup

		Route::get('upcomingEvent','UpcomingEventController@index')->name('upcomingEvent');
		Route::group(['prefix'=>'upcomingEvent'],function(){
			Route::get('create','UpcomingEventController@create');
			Route::post('store','UpcomingEventController@store');
			Route::post('edit','UpcomingEventController@edit');
			Route::post('update','UpcomingEventController@update');
			Route::post('delete','UpcomingEventController@delete');
		});
		// end upcoming event group

		Route::get('news','NewsController@index');
		Route::group(['prefix'=>'news'],function(){
			Route::get('create','NewsController@create');
			Route::post('store','NewsController@store');
			Route::post('edit','NewsController@edit');
			Route::post('update','NewsController@update');
			Route::post('delete','NewsController@delete');
		});
		// end news group

		Route::get('gallery','GalleryController@index');
		Route::group(['prefix'=>'gallery'],function(){
			Route::get('create','GalleryController@create');
			Route::post('store','GalleryController@store');
			Route::post('edit','GalleryController@edit');
			Route::post('update','GalleryController@update');
			Route::post('delete','GalleryController@delete');
		});
		// end gallery group

		Route::group(['prefix'=>'profile'],function(){
			Route::get('edit','ProfileController@edit');
			Route::post('update','ProfileController@update');
		});

		Route::get('report','ReportController@index');
		Route::group(['prefix'=>'report'],function(){

		});
		// end report group

		Route::get('order','OrderController@index');
		Route::group(['prefix'=>'order'],function(){
			Route::post('delete','OrderController@delete');
			Route::post('payment','OrderController@payment');
		});
		// end order group

	});
	// end admin group

});
// end first security

// API routes
Route::group(['middleware'=>'api','prefix'=>'api'],function(){
	Route::post('auth/login','ApiController@login');

	Route::group(['middleware'=>'jwt.auth'],function(){
		Route::post('user','ApiController@getAuthUser');
		Route::post('problem','ApiController@getProblem');
		Route::post('request','ApiController@request');
	});
});

