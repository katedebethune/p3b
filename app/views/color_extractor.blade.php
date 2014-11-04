@extends('_master')

@section('title')
	Color Extractor
@stop

@section('nav')
	{{ HTML::nav() }}
@stop

@section('content')

	<h2>Your color palette is:</h2>
		@foreach ($palette as $color)
    		<div class='box' style="background-color:{{ $color }};">
    			{{ $color }}
    		</div>
		@endforeach
	<br><br>
@stop
