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
	<h4>{{link_to_action('PostsController@create', ' + Create a New Post')}}</h4>

	@foreach ($posts as $post) 
		<h2>{{link_to_action('PostsController@show', $post->title, array($post->id))}}</h2>
		<h5>{{{$post->created_at->format('l, F jS Y @ h:i:s A')}}}</h5>
		<h4>{{{ substr($post->body, 0, 5) .'...' }}}</h4>
		<p>{{link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' => 'btn btn-default'))}}</p>
	@endforeach
	

	{{ $posts->links() }}

	{{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}
	{{ Form::text('search', null, array('placeholder'=>'Search'))}}
	<button type="Submit">Search Posts</button>
	{{ Form::close() }}
	<br>
	
	<div>
@stop