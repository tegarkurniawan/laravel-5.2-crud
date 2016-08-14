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


	Route::auth();
	Route::get('/home', 'HomeController@index');
	Route::group(['prefix' => 'artikel'], function(){
		
		Route::get('/', [
		            'as' => 'artikel-index', 'uses' => 'ArtikelController@index'
		]);
		
		Route::get('/create', [
		            'as' => 'artikel-create', 'uses' => 'ArtikelController@create'
		]);

		Route::post('/create', [
		            'as' => 'artikel-store', 'uses' => 'ArtikelController@store'
		]);

		Route::get('/edit/{id?}', [
	            'as' => 'artikel-edit', 'uses' => 'ArtikelController@edit'
	        ]);

	    Route::patch('/update/{id?}', [
	            'as' => 'artikel-update', 'uses' => 'ArtikelController@update'
	        ]);

		Route::get('/delete/{id?}', [
		            'as' => 'artikel-delete', 'uses' => 'ArtikelController@delete'
		]);

	});
