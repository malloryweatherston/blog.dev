<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@logout');



Route::get('/', function(){
	return View::make('pages.home');
});

Route::get('/resume', function(){
	return View::make('pages.resume');
});

Route::get('/portfolio', function(){
	return View::make('pages.portfolio');
});

Route::get('/about', function(){
	return View::make('pages.about');
});

Route::get('/sayhello/{name}', 'HomeController@sayHello');

Route::resource('posts', 'PostsController');



