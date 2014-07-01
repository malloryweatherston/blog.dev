@extends('layout.master')

@section('content')
	<h1>Mallory Weatherston's Blog</h1>

	@foreach ($posts as $post) 
		<h3>{{link_to_action('PostsController@show', $post->title, array($post->id))}}</h3>
		<p>{{{$post->body}}}</p>
		<p>{{link_to_action('PostsController@edit', 'Edit', array($post->id))}}</p>
	
	@endforeach
	
	{{link_to_action('PostsController@create', 'Create a New Post')}}
	

@stop