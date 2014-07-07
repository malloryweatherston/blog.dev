<?php

class PostsController extends \BaseController {
	
	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		//$posts = Post::with('user')->paginate(4);
		if (Input::has('search')){
			$search = Input::get('search');
			$posts = Post::with('user')->orderBy('created_at', 'desc')->where("title", "LIKE", "%$search%")->paginate(4);
			return View::make('posts.index')->with('posts', $posts);
		} else {
			$posts = Post::paginate(4);
		}

		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		return View::make('posts.create-edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	


		$validator = Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()) 
		{	
			Session::flash('errorMessage', 'There were errors submitting your form');

			// retrieve flash data (same as any other session variable)

			return Redirect::back()->withInput()->withErrors($validator);

		}
		else
		{	

			$post = new Post();
			$post->user()->associate(Auth::user());
			$post->title = Input::get('title');
			$post->body= Input::get('body');
			$post->save();
			if (Input::hasFile('image') && Input::file('image')->isValid())
				{
    				$post->addUploadedImage(Input::file('image'));
    				$post->save();
				}
			// set flash data
			Session::flash('successMessage', 'Post created successfully');

			// retrieve flash data (same as any other session variable)

			return Redirect::action('PostsController@index');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
 		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);	
		return View::make('posts.create-edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	
		$validator = Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()) 
		{	// set flash data
			Session::flash('errorMessage', 'Post update Failed');

			// retrieve flash data (same as any other session variable)
			
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{	
			$post = Post::find($id);
			$post->title = Input::get('title');
			$post->body= Input::get('body');
			$post->save();
			// set flash data
			Session::flash('successMessage', 'Post updated successfully');

			// retrieve flash data (same as any other session variable)

			return Redirect::action('PostsController@index');
		}
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	$post = Post::findOrFail($id);
		$post->delete();
		Session::flash('successMessage', 'Post deleted successfully');

		return Redirect::action('posts.index');
	}


}
