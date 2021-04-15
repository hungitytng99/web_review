<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Foodee</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A product of review food and restaurant " />
	<meta name="keywords" content="review food shop restaurant star" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="Home/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="Home/css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="Home/css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="Home/css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="Home/css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="Home/css/bootstrap.css">
	<!-- Owl carousel -->
	<link rel="stylesheet" href="vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<!-- Normalize html -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- My css -->
	<link rel="stylesheet" href="Home/css/style.css">
	<link rel="stylesheet" href="Home/css/homestyle.css">
	<link rel="stylesheet" href="Home/css/responsive.css">
	<!-- Modernizr JS -->

	<script src="Home/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div id="container">
		<!-- Banner intro -->
		<div id="home" class="js-fullheight" data-section="home">
			<div class="flexslider">
				<div class="overlay"></div>
				<div class="text">
					<div class="container">
						<div class="row --center">
							<h1 class="to-animate">foodee</h1>
							<h2 class="to-animate">Sức khỏe và sự hài lòng <span> với</span> <a href="/">foodee.co</a></h2>
						</div>
					</div>
				</div>
				<ul class="slides">
					<li style="background-image: url(Home/images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
					<li style="background-image: url(Home/images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
					<li style="background-image: url(Home/images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
				</ul>
			</div>
		</div>

		<!-- Header -->
		@include('Header.header')

</body>

</html>