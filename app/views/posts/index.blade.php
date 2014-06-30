@extends('layout.master')

@section('content')

<?php
	foreach ($posts as $post) {
		echo $post->title . "<br>";
		echo $post->body . "<br>";
	}

	
?>
@stop