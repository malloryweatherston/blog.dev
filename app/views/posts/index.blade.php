@extends('layout.master')

@section('content')
	<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h2>MALLORY WEATHERSTON'S BLOG</h2>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->
	<div align="center">
	<!-- <h4>{{link_to_action('PostsController@create', ' + Create a New Post')}}</h4> -->
	<div class="form-group">
			<h4>Blog Search</h4>
			{{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}
			{{ Form::text('search', null, array('placeholder'=>'Search'))}}
		    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
			{{ Form::close() }}
	</div>

	
	@foreach ($posts as $post) 
	<hr>
		<h1>{{link_to_action('PostsController@show', $post->title, array($post->id))}}</h1>
		<h4>{{{$post->created_at->format('l, F jS Y @ h:i:s A')}}}</h4>
		<h5>Author: {{{$post->user->first_name}}} {{{$post->user->last_name}}}</h5>
		<h3>{{ substr($post->renderBody(), 0, 10) .'...' }}</h3>
		<p>{{link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' => 'btn btn-default'))}}</p>
		<p>{{link_to_action('PostsController@show', 'Read More', array($post->id), array('class' => 'btn btn-default'))}}
	@endforeach
	


	{{ $posts->links() }}
	
		<br>
	</div>
@stop