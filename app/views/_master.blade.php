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


		<!-- jquery -->
		<!-- <link rel="stylesheet" href="/public/styles/jquery-ui/jquery-ui.min.css"> -->
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>	
		<!-- <script src="external/jquery/jquery.js"></script> -->
		<!-- <script src="/public/styles/jquery-ui/jquery-ui.min.js"></script> -->
		
		<title>jQuery UI Accordion - Default functionality</title>
  		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  		<link rel="stylesheet" href="/resources/demos/style.css">
  		<script>
  			$(function() {
    		$( "#accordion" ).accordion();
  			});
  		</script>


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

<!--
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>
</head> -->

<!-- 
<body>
 
<div id="accordion">
  <h3>Section 1</h3>
  <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3>Section 3</h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div> -->
 
 
</body>
</html>




