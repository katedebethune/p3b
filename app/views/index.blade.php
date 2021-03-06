@extends('_master')

@section('title')
	Welcome to the Developer's Best Friend
@stop

@section('content')
	
	 <h2>Tools for Web Development</h2>
      <p>Offering <strong>lorem ipsum</strong>, <strong>fake user</strong>, <strong>random password</strong>, 
      and <strong>color palette</strong> generators to simplify your life as a web developer.</p>
      <div class="row">
       
       {{--Lorem Ipsum Generator--}}
       
        <div class="col-md-3">
        	<h3>Lorem Ipsum </h3>
        	<p><strong>Dummy text for layout</strong>. Select up to 99 paragraphs.</p>
			
			{{ Form::open(array(
				'url' => '/lorem',
				'method' => 'GET'
			)) }}
				{{-- paragraph request --}}
				{{ Form::label('paragraphs', 'Paragraphs') }}
				{{ Form::text('paragraphs', '5', array('class' => 'resizedTextbox')) }}
				<br>
				{{-- submit button --}}
				{{ Form::submit('Get my lorem!!', array('class' => 'btn btn-small btn-primary')) }}
		
			{{ Form::close() }}
        </div>
        
        {{--Random User Generator--}}
        
        <div class="col-md-3">
        	<h3>Users</h3>
        	<p><strong>Fake users for app testing</strong>. Select 5 to 99 fake users, with optional birthdates and profiles. </p>
			
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
				{{ Form::submit('Get my users!!', array('class' => 'btn btn-small btn-primary')) }}

			{{ Form::close() }}
        </div>
        
    	{{--Color Extractor--}}
    	
        <div class="col-md-3">
        	<h3>Colors</h3>
        	<p><strong>Create a color palette</strong> from any <strong>png</strong> image.</p>
        	
        	{{ Form::open(array('url'=>'color_extractor','files'=>true)) }}
	
  					{{--choose a png file--}}
  					{{ Form::label('file','Choose your file') }}
  					{{ Form::file('file','',array('id'=>'','class'=>'')) }}
  					<br/>
  	
  					{{-- submit buttons --}}
  					{{ Form::submit('Get my colors!!', array('class' => 'btn btn-small btn-primary')) }}
  
  					{{-- reset buttons --}}
  					{{ Form::reset('Reset', array('class' => 'btn btn-small')) }}
  
  			{{ Form::close() }}
        </div>
        
        {{--Password Generator --}}
        
        <div class="col-md-3">
        	<h3>Passwords</h3>
        	<p><strong>Random, multi-word passwords</strong>. Select 3 to 8 words, with optional symbol, digit, or leading cap.</p>
  			
  			{{ Form::open(array(
				'url' => '/password_gen',
				'method' => 'GET'
			)) }}

				{{--select number of words --}}
				{{ Form::label('num_words', 'Words') }}
				{{ Form::text('num_words', '3', array('class' => 'resizedTextbox')) }}
				<br>
				{{--select optional symbol --}}
				{{ Form::label('symbol', 'Symbol?') }}
				{{ Form::select('symbol', array('1' => 'yes', '0' => 'no'), '1')}}
				<br>
				{{--select optional digit --}}
				{{ Form::label('digit', 'Number?') }}
				{{ Form::select('digit', array('1' => 'yes', '0' => 'no'), '1') }}
				<br>
				{{--select optional leading cap --}}
				{{ Form::label('cap', 'Leading cap?') }}
				{{ Form::select('cap',array('1' => 'yes', '0' => 'no'), '1')}}
				<br>
				{{-- submit button --}}
				{{ Form::submit('Get my password!!', array('class' => 'btn btn-small btn-primary')) }}

		{{ Form::close() }}
        </div>
      </div>
      

	<div id="accordion">
  	<h3>Lorem Ipsum</h3>
  	<div>
  	
        	<p><strong>Dummy text for layout</strong>. Select up to 99 paragraphs.</p>
			
			{{ Form::open(array(
				'url' => '/lorem',
				'method' => 'GET'
			)) }}
				{{-- paragraph request --}}
				{{ Form::label('paragraphs', 'Paragraphs') }}
				{{ Form::text('paragraphs', '5', array('class' => 'resizedTextbox')) }}
				<br>
				{{-- submit button --}}
				{{ Form::submit('Get my lorem!!', array('class' => 'btn btn-small btn-primary')) }}
		
			{{ Form::close() }}
        </div>
  
  <!-- <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div> -->
  <h3>Users</h3>
  <div>
    <p><strong>Fake users for app testing</strong>. Select 5 to 99 fake users, with optional birthdates and profiles. </p>
			
			{{ Form::open(array(
				'url' => '/users',
				'method' => 'GET'
			)) }}

				{{ Form::label('users', 'Users') }}
				{{ Form::text('users', '5', array('class' => 'resizedTextbox')) }}
				<br>
				{{ Form::label('birthday', 'Birthday?') }}
				{{ Form::select('birthday', array('1' => 'yes', '0' => 'no'), '1') }}
				
				{{ Form::label('profile', 'Profile?') }}
				{{ Form::select('profile', array('1' => 'yes', '0' => 'no'), '1') }}
				<br>
				{{-- submit button --}}
				{{ Form::submit('Get my users!!', array('class' => 'btn btn-small btn-primary')) }}

			{{ Form::close() }}
  </div>
  <h3>Colors</h3>
  <div> 
  <p><strong>Create a color palette</strong> from any <strong>png</strong> image.</p>
        	
        	{{ Form::open(array('url'=>'color_extractor','files'=>true)) }}
	
  					{{--choose a png file--}}
  					{{ Form::label('file','Choose your file') }}
  					{{ Form::file('file','',array('id'=>'','class'=>'')) }}
  					<br/>
  	
  					{{-- submit buttons --}}
  					{{ Form::submit('Get my colors!!', array('class' => 'btn btn-small btn-primary')) }}
  
  					{{-- reset buttons --}}
  					{{ Form::reset('Reset', array('class' => 'btn btn-small')) }}
  
  			{{ Form::close() }}
  </div>
  <h3>Passwords</h3>
  <div> 
   
   <p><strong>Random, multi-word passwords</strong>. Select 3 to 8 words, with optional symbol, digit, or leading cap.</p>
   {{ Form::open(array(
				'url' => '/password_gen',
				'method' => 'GET'
			)) }}

				{{--select number of words --}}
				{{ Form::label('num_words', 'Words') }}
				{{ Form::text('num_words', '3', array('class' => 'resizedTextbox')) }}
				
				{{--select optional symbol --}}
				{{ Form::label('symbol', 'Symbol?') }}
				{{ Form::select('symbol', array('1' => 'yes', '0' => 'no'), '1')}}
				<br>
				{{--select optional digit --}}
				{{ Form::label('digit', 'Number?') }}
				{{ Form::select('digit', array('1' => 'yes', '0' => 'no'), '1') }}
			
				{{--select optional leading cap --}}
				{{ Form::label('cap', 'Cap?') }}
				{{ Form::select('cap',array('1' => 'yes', '0' => 'no'), '1')}}
				<br>
				{{-- submit button --}}
				{{ Form::submit('Get my password!!', array('class' => 'btn btn-small btn-primary')) }}

		{{ Form::close() }}
  </div>
</div><!-- for accordion open div -->
      
    
@stop


 




