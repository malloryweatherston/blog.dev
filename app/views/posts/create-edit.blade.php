@extends('layout.master')

@section('content')

 <div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				@if (isset($post))
					<h1>Update a Post</h1>
				@else
					<h1>Create a New Post</h1>
				@endif

				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->
<br>
<div align="center">
@if (isset($post))
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
@else
	{{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
@endif

@if ($errors->has('title'))
	{{$errors->first('title', '<span class="help-block">:message</span>')}}
@endif
@if ($errors->has('body'))
	{{$errors->first('body', '<span class="help-block">:message</span>')}}
@endif
	{{ Form::label('title', 'Title:')}}
	{{ Form::text('title')}}
	<br>
	{{ Form::label('image', 'Image Upload:')}}
	{{ Form::file('image')}}
	<br>
	{{ Form::label('body', 'Body:')}} {{ Form::textarea('body')}}
	<br>
	<button type="Submit">Create</button>


{{ Form::close() }}
</div>
@stop