@extends('layout.master')

@section('content')
    <!DOCTYPE html>


    {{ Form::open (action => HomeController@dologin) }}
    {{ Form::label('email', 'Email:')}}
	{{ Form::text('email')}}
	<br>
	{{ Form::label('password', 'Password:')}}
	{{ Form::text('password')}}
	<br>
	<button type="Submit">Log In</button>


    {{ Form::close() }}
@stop