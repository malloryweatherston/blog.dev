@extends('layout.master')

@section('content')
	<h1>Mallory Weatherston's Blog</h1>

	@foreach ($posts as $post) 
		<h3>{{link_to_action('PostsController@show', $post->title, array($post->id))}}</h3>
		<p>{{{$post->body}}}</p>
	
	@endforeach
	
	{{link_to_action('PostsController@create', 'Create a New Post')}}
	

@stop