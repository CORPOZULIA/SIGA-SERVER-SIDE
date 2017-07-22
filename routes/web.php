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

Route::group(["middleware" => "api"], function(){

	Route::group(['prefix' => 'desktopApp'], function(){
		Route::post("/", "Desktop\App@index");
		Route::get("/usuario", "Desktop\App@usuario");
		Route::post("/login", "Auth\AuthenticateController@authenticate");

		Route::group(['middleware' => 'auth-api'], function(){
			Route::get('/bienes', 'Modulos\bienes\RouterController@routing');
		});
	});
	
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function(){
	return 'Hola mundo';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
