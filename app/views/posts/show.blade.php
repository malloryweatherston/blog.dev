@extends('layout.master')

@section('content')
	<h1>Mallory Weatherston's Blog</h1>
	<h3>{{{$post->title}}}</h3>
	<p>{{{$post->body}}}</p>
@stop