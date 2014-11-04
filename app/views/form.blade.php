@extends('_master')

@section('title')
	Color Extractor
@stop

@section('nav')
<nav>
		<ul>
			<li><a href='/'>Back</a></li>
		</ul>
	</nav>
@stop

@section('content')
	<h1>Color Extractor</h1>

	<h2>The three most prevalent colors in your image are:</h2>
	
	{{ fill in colors here. }}
	
@stop