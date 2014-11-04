@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('nav')
	{{ HTML::nav() }}
@stop

@section('content')
	<h2>You requested  {{{ $paragraphs }}} paragraphs of Lorem Ipsum text.</h2>
	
	@foreach($chunks as $chunk)
		{{ $chunk."<br><br>" }}
	@endforeach
	
@stop
