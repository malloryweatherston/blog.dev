@extends('layout.master')

@section('content')

<h1>Create New Post</h1>
@if ($errors->has('title'))
	{{$errors->first('title', '<span class="help-block">:message</span>')}}
@endif
{{ Form::open(array('action' => 'PostsController@store')) }}
	{{ Form::label('title', 'Title:')}}
	{{ Form::text('title')}}
	<br>
	{{ Form::label('body', 'Body:')}}
	{{ Form::textarea('body')}}
	<br>
	<button type="Submit">Create</button>


{{ Form::close() }}
@stop