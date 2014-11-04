<!DOCTYPE html>
<HTML>
<head>
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
    	<meta name="author" content="">
    	<link rel="icon" href="../../favicon.ico">
        <title>Developer's Best Friend</title>
        {{-- HTML::style('css/pm_reset.css') --}}
        {{-- HTML::style('css/bootstrap.css') --}}
        {{ HTML::style('styles/styles.css') }}

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		
		{{ HTML::style('styles/styles.css') }}
        
</head>
<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      		<div class="container">
        		<div class="navbar-header">
          			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            			<span class="sr-only">Toggle navigation</span>
            			<span class="icon-bar"></span>
          			</button>
          			<a class="navbar-brand" href="/">The Developer's Best Friend</a>
        		</div>
        		<div id="navbar" class="collapse navbar-collapse">
          			<ul class="nav navbar-nav">
            			<li class="active"><a href="/">Home</a></li>
          			</ul>
        		</div><!--/.nav-collapse -->
      		</div>
    	</nav>
		
		<div class="container">
			<br /><br />
			<!-- <div class="page-header"> -->
        		<!-- <h1>Tools for Web Development</h1> -->
        		<!-- <p class="lead">Tools for Web Development</p> -->
        		<!-- <p class="lead">The Developer's Best Friend offers tools to help generate dummy content,
        		passwords, and users for app testing. There's also a color extractor to generate color
        		palettes from image files.</p> -->
      		<!-- </div> -->
			
			<!-- <div class="header">
				<h1>The Developer's Best Friend</h1>
				<p>&nbsp;&nbsp;A Set of Tools for Web Development</p>
			</div> -->
	
			<div style="clear: both;"></div>
				@yield('content')
			<br /><br />
			
			 <div class="footer">
      			<div class="container">
        			<p class="text-muted">Copyright &#169; {{ date("Y"); }} SKD</p>
      			</div>
    		</div>
			
		</div>
</body>




