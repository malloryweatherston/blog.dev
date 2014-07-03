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

Route::get('/', 'HomeController@showWelcome');

Route::get('/', function(){
	return View::make('layout.master');
});

Route::get('/home', function(){
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



