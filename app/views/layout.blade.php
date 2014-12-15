<html>
	<head>
		<title>Application</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/normalize.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/foundation.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/custom.css') }}">
	</head>
	<body>


	<audio autoplay>
	  <source src="assets/media/New Summoner's Rift Theme Song (League of Legends).mp3" type="audio/ogg">
	</audio>

	<div class="container">
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<img src="{{ asset('assets/media/header.jpg') }}">
			</div>
		</div>
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
			 	@yield('content')
			</div>
		</div>
	</div>

	<script src="{{ asset('assets/javascript/jquery.js') }}"></script>
	<script src="{{ asset('assets/javascript/foundation.min.js') }}"></script>
	<script src="{{ asset('assets/javascript/common.js') }}"></script>
	<script>$(document).foundation()</script>
	</body>
</html>