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
		<h2>{{{$post->title}}}</h2>
		<h5>{{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</h5>
		<h4>{{{$post->body}}}</h4>

		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE' )) }}
			{{ Form::submit('Delete') }}
		{{ Form::close() }}
	</div>
@stop