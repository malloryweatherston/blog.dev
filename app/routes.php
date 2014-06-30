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

Route::get('/resume', function(){
	return View::make('pages.resume');
});

Route::get('/portfolio', function(){
	return View::make('pages.portfolio');
});

Route::get('/sayhello/{name}', 'HomeController@sayHello');

Route::resource('posts', 'PostsController');

// Route::get('/index', function () {
 //    $post = new Post();
 //    $post1 = new Post();
	// $post1->title = Input::get('Title');
	// $post1->body = Input::get('Body');
	// $post1->save();
	// $posts = Post::all();

	// foreach ($posts as $post) {
	// 	echo $post->title . "<br>";
	// 	echo $post->body . "<br>";
	// }
	// $post = Post::find(1);
	// echo $post->title . "<br>";
	// echo $post->body . "<br>";
 //    $post->title = "This is a NEW title";


    //return 'Eloquent ORM';

// Route::get('/show{id}', function($id){
// 	$post = Post::find($id);
// 	echo $post->title . "<br>";
// 	echo $post->body . "<br>";
 	//$post->title = "This is a NEW title";

// });
// Route::get('/create', function() {
// 	return View::make('posts.create');
// });

// Route::get('/rolldice/{guess}', function($guess){
// 	$rand =  rand (1, 6);
// 	$data = array(
// 		'rand' => $rand,
// 		'guess' => $guess
// 	);
// 	return View::make('temp.roll-dice')->with($data);
// });

