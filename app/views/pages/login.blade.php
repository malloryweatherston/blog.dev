@extends('layout.master')

@section('content')
    <!DOCTYPE html>
    <div align= "center">
	     <div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h2>PLEASE LOG IN</h2>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->
	    <br>
	    {{ Form::open(array('action' => 'HomeController@doLogin')) }}
	    {{ Form::label('email', 'Email:')}}
		{{ Form::text('email')}}
		<br>
		{{ Form::label('password', 'Password:')}}
		{{ Form::password('password')}}
		<br>
		<button type="Submit" class="btn btn-default">Log In</button>


	    {{ Form::close() }}
	</div>
@stop