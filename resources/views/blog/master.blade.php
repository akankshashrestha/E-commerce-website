<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="{{URL('https://bootswatch.com/united/bootstrap.min.css')}}">
</head>
<body>

	@include('blog.partials.nav')
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-md-6">
				
					@yield('content')
				
			</div>
		
		</div>
		
	</div>
		
	@include('partials.footer')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="{{URL('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>