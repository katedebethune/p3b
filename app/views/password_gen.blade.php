@extends('_master')

@section('title')
	XKCD-password Generator
@stop

@section('nav')
	{{ HTML::nav() }}
@stop

@section('content')

	<div class="pw_header">
		<h2>Here is your password:</h2>
	</div>
	
	<div class="pw_output">
		<h2> {{ $pwd; }} </h2>
	</div>
	
@stop
