<!DOCTYPE html>
<HTML>
<head>
        <title>Developer's Best Friend</title>
        <meta charset="utf-8">
        {{ HTML::style('css/pm_reset.css') }}
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/styles.css') }}
        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        
</head>
<body>
		<a href='/'><img class='logo' src="/images/anvil.png" alt="dev best friend logo"></a> 
		<div class="header">
			<h1>The Developer's Best Friend</h1>
			<p>&nbsp;&nbsp;A Set of Tools for Web Development</p>
		</div>
	
		<div style="clear: both;"></div>
			@yield('nav')
			@yield('content')
		<br>
		<div class="footer">
			<p>copyright 2014, SK deBethune, all rights reserved</p>
		</div>
</body>




