@extends('_master')

@section('title')
	Random User Generator
@stop

@section('nav')
	{{ HTML::nav() }}
@stop

@section('content')
	{{ "<h2>You requested ".$num_requested." fake users:</h2>" }}
	
	
	@foreach($fake_users as $fake_user)
		<div class="names">
			{{ $fake_user['name']."<br>" }}
		</div>
		
		@if ( $fake_user['birthday'] != NULL )
			{{ $fake_user['birthday']."<br>" }}
		@endif
		
		@if ( $fake_user['profile'] != NULL )
			{{ $fake_user['profile']."<br>" }}
		@endif
		
		{{ "<br>" }}
		
	@endforeach
	
	{{-- if all fields are present, outputs arrays for a database script --}}
	@if (( $fake_user['birthday'] != NULL ) && ( $fake_user['profile'] != NULL ))
	{{ "<h2>Data in Array Form</h2>" }}
		@foreach($fake_users as $fake_user)
		
		{{ "array('name'=>\"".$fake_user['name']."\",'birthday'=>\"".$fake_user['birthday']."\",'profile'=>\"".$fake_user['profile']."\") " }}
		
		{{ "<br>" }}
		
		@endforeach
	@endif
	
	
	
@stop
