@extends('layout.master')

@section('content')

<h1>Create New Post</h1>
<form method="POST" action = "{{{ action('PostsController@store') }}}">
	<p>
		<label for="Title">Title:</label>
		<input id="Title" name="Title" type="text" placeholder="Enter Title Here" value="{{{ Input::old('Title') }}}">
	</p>
	<p>
		<label for="Body">Body:</label>
		<textarea id="Body" name="Body" type="text" placeholder="Enter Body Here">{{{ Input::old('Body') }}}</textarea>
	</p>
	<p>
		<button type="Submit">Create</button>
	</p>

</form>
@stop