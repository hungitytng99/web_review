<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Foodreview by HUST" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="/favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Base css -->
	<link rel="stylesheet" href="/Base/css/base.css">
	<!-- Modernizr JS -->
	<script src="/Homepage/js/modernizr-2.6.2.min.js"></script>
	<!-- jQuery -->
	<script src="/Homepage/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/Homepage/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/Homepage/js/bootstrap.min.js"></script>
	<!-- Flexslider -->
	<script src="/Homepage/js/jquery.flexslider-min.js"></script>
	<!-- Waypoints -->
	<script src="/Homepage/js/jquery.waypoints.min.js"></script>
	@yield('css')
</head>

<body>
	@yield('content')
	@yield('js')
</body>

</html>