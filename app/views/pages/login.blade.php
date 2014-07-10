@extends('layout.master')

@section('content')
    <!DOCTYPE html>
    <div align= "center">
	     <div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h1>PLEASE LOG IN</h1>
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
	<!--  <div align="center">
		<div class="footer">
    		<div class="container">
        		<p class="text-muted">&copy; Mallory Weatherston 2014. All rights reserved.</p>
      		</div>
    	</div> -->
@stop