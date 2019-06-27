<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/custom.css">
</head>
<body>
	@include('includes.navbar')

	<div class="container" style="margin-top: 5%;">
		@if(Request::is('/'))
			@include('includes.showcase')
		@endif
		
			<div class="text-center">
				@include('includes.messages')
				@yield('content')
			</div>
			<!-- <div class="col-md-4 col-lg-4">
				@include('includes.sidebar')	
			</div> -->
		
    </div>
<footer id="footer" class="text-center">
	<p>Copyright 2019 &copy;</p>
</footer>

</body>
</html>