@extends('layout.master')

@section('content')
<h1>Update a Post</h1>
@if ($errors->has('Title'))
	{{$errors->first('Title', '<span class="help-block">:message</span>')}}
@endif
{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	{{ Form::label('Title', 'Title:')}}
	{{ Form::text('Title')}}
	<br>
	{{ Form::label('Body', 'Body:')}}
	{{ Form::textarea('Body')}}
	<br>
	<button type="Submit">Update</button>


{{ Form::close() }}


@stop