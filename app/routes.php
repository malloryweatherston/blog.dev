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
Route::get('/', function(){
	return View::make('layout.master');
});

Route::get('/resume', function(){
	return View::make('pages.resume');
});

Route::get('/portfolio', function(){
	return View::make('pages.portfolio');
});

Route::get('/rolldice/{guess}', function($guess){
	$rand =  rand (1, 6);
	$data = array(
		'rand' => $rand,
		'guess' => $guess
	);
	return View::make('temp.roll-dice')->with($data);
});

