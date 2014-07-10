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
		<h1>{{{$post->title}}}</h1>
		<h4>{{{$post->created_at->format('l, F jS, Y @ h:i:s A')}}}</h4>
		<h5>Author: {{{$post->user->first_name}}} {{{$post->user->last_name}}}</h5>
		<h3>{{ $post->renderBody() }}</h3>
		@if ($post->img_path)
			<img src="{{{ $post->img_path }}}">
		@endif

		
	</div>
@stop