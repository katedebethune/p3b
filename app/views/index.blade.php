@extends('_master')

@section('title')
	Welcome to the Developer's Best Friend
@stop

@section('content')
	
	 <h3>Tools for Web Development</h3>
      <p>Offering <strong>lorem ipsum</strong>, <strong>fake user</strong>, <strong>random password</strong>, 
      and <strong>color palette</strong> generators to simplify your life as a web developer.</p>
      <div class="row">
       
       {{--Random User Generator--}}
       
        <div class="col-md-3">
        	<h4>Lorem Ipsum </h4>
        	<p>Dummy text for layout and prototyping.</p> 
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
        </div>
        
        {{--Random User Generator--}}
        
        <div class="col-md-3">
        	<h4>Random Users</h4>
        	<p>Fake users for app testing.</p> 
			<p>Select from 5 to 99 fake users, with optional birthdates and profiles. 
			If all three options are selected, also outputs arrays for db script.</p>
			
			{{ Form::open(array(
				'url' => '/users',
				'method' => 'GET'
			)) }}

				{{ Form::label('users', 'Users') }}
				{{ Form::text('users', '5', array('class' => 'resizedTextbox')) }}
				<br>
				{{ Form::label('birthday', 'Birthday?') }}
				{{ Form::select('birthday', array('1' => 'yes', '0' => 'no'), '1') }}
				<br>
				{{ Form::label('profile', 'Profile?') }}
				{{ Form::select('profile', array('1' => 'yes', '0' => 'no'), '1') }}
				<br>
				{{-- submit button --}}
				{{ Form::submit('Get my users!!') }}

			{{ Form::close() }}
        </div>
        
    	{{--Color Extractor--}}
    	
        <div class="col-md-3">
        	<h4>Colors</h4>
        	<p>Color palette from any png image (outputs up to 5 colors).</p>
        	
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
        </div>
        
        {{--Password Generator --}}
        
        <div class="col-md-3">
        	<h4>Passwords</h4>
        	<p>Random, multi-word passwords.</p> 
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
        </div>
      </div>
      
    
@stop


 




