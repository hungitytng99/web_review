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
	<link rel="shortcut icon" href="favicon.ico">
	<link
		href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic'
		rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="Home/css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="Home/css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="Home/css/bootstrap.css">
	
	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- My css -->
	<link rel="stylesheet" href="Base/css/base.css">
	<link rel="stylesheet" href="Home/css/style.css">
	<link rel="stylesheet" href="Home/css/header.css">
	<link rel="stylesheet" href="Home/css/homestyle.css">
	<!-- Modernizr JS -->

	<script src="Home/js/modernizr-2.6.2.min.js"></script>

</head>

<body>
	@yield('content')
</body>

</html>