@extends('_master')

@section('title')
	Welcome to the Developer's Best Friend
@stop

@section('content')
	
	{{--Lorem Ipsum Generator--}}
	
	<h3>Lorem Ipsum Generator</h3>
	<p>Generate dummy text for layout and prototyping.</p> 
	<p>Select up to 99 paragraphs.</p>
	
	{{ Form::open(array(
		'url' => '/lorem',
		'method' => 'GET'
	)) }}
		{{-- paragraph request --}}
		{{ Form::label('paragraphs', 'Paragraphs') }}
		{{ Form::text('paragraphs', '5', array('class' => 'resizedTextbox')) }}
		<br>
		{{-- submit button --}}
		{{ Form::submit('Get my lorem!!') }}
		
	{{ Form::close() }}
	
	<hr>
	
	{{--Random User Generator--}}
	
	<h3>Random User Generator</h3>
	<p>Generate fake users for app testing.</p> 
	<p>Select from 5 to 99 fake users, with optional birthdates and profiles. 
	If all three options are selected, also outputs arrays for db script.</p>
	
	{{ Form::open(array(
		'url' => '/users',
		'method' => 'GET'
	)) }}

		{{ Form::label('users', 'Users') }}
		{{ Form::text('users', '5', array('class' => 'resizedTextbox')) }}
	
		{{ Form::label('birthday', 'Birthday?') }}
		{{ Form::select('birthday', array('1' => 'yes', '0' => 'no'), '1') }}
		
		{{ Form::label('profile', 'Profile?') }}
		{{ Form::select('profile', array('1' => 'yes', '0' => 'no'), '1') }}
		<br>
		{{-- submit button --}}
		{{ Form::submit('Get my users!!') }}

	{{ Form::close() }}
	
	<hr>
	
	{{--Color Extractor--}}
	
	<h3>Color Extractor</h3>
	<p>Create a color palette from any png image (outputs up to 5 colors).</p>
	
	{{ Form::open(array('url'=>'color_extractor','files'=>true)) }}
	
  		{{--choose a png file--}}
  		{{ Form::label('file','Choose your file') }}
  		{{ Form::file('file','',array('id'=>'','class'=>'')) }}
  		<br/>
  	
  		{{-- submit buttons --}}
  		{{ Form::submit('Get my colors!!') }}
  
  		{{-- reset buttons --}}
  		{{ Form::reset('Reset') }}
  
  	{{ Form::close() }}
  	
  	<hr>
  	
  {{--Password Generator --}}
  
  <h3>XKCD-style Password Generator</h3>
  <p>Generate a random, multi-word password.</p> 
  <p>Select from 3 to 8 words, with optional symbol, digit, or leading cap.</p>
  
  {{ Form::open(array(
		'url' => '/password_gen',
		'method' => 'GET'
	)) }}

		{{--select number of words --}}
		{{ Form::label('num_words', 'Number of Words') }}
		{{ Form::text('num_words', '3', array('class' => 'resizedTextbox')) }}
	
		{{--select optional symbol --}}
		{{ Form::label('symbol', 'Add a symbol?') }}
		{{ Form::select('symbol', array('1' => 'yes', '0' => 'no'), '1')}}
		<br>
		{{--select optional digit --}}
		{{ Form::label('digit', 'Add a number?') }}
		{{ Form::select('digit', array('1' => 'yes', '0' => 'no'), '1') }}
	
		{{--select optional leading cap --}}
		{{ Form::label('cap', 'Capitalize first letter?') }}
		{{ Form::select('cap',array('1' => 'yes', '0' => 'no'), '1')}}
		<br>
		
		{{-- submit button --}}
		{{ Form::submit('Get my password!!') }}

	{{ Form::close() }}
	<hr>
@stop


 




