@extends('layout.master')

@section('content')
<h1>Update a Post</h1>
@if ($errors->has('title'))
	{{$errors->first('title', '<span class="help-block">:message</span>')}}
@endif
{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	{{ Form::label('title', 'Title:')}}
	{{ Form::text('title')}}
	<br>
	{{ Form::label('body', 'Body:')}}
	{{ Form::textarea('body')}}
	<br>
	<button type="Submit">Update</button>


{{ Form::close() }}


@stop