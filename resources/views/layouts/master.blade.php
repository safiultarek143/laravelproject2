<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title', 'nothing to say')
	</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
	@yield('stylesheets')
</head>
<body>
	<nav>
		@include('partials.navbar')
	</nav>
<header style="margin-top: 50px; background:black; color:#fff">
	<h3>Highway To Hell</h3>
</header>
<div class="wrapper">
<div class="content">
	@yield('content')
</div>
<div class="sidebar">

	@include('partials.sidebar')
</div>	
<div class="clear"></div>
</div>

<footer style="margin-top: 50px; background:black; color:#fff">All rights reserved to jack bhai 
	
</footer>
</body>
</html>