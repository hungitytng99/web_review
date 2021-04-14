<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Foodee</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link
		href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic'
		rel='stylesheet' type='text/css'>

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
	<link rel="stylesheet" href="Home/css/header.css">
	<link rel="stylesheet" href="Home/css/homestyle.css">
	<!-- Modernizr JS -->

	<script src="Home/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div id="container">
		<div id="home" class="js-fullheight" data-section="home">
			<div class="flexslider">
				<div class="overlay"></div>
				<div class="text">
					<div class="container">
						<div class="row --center">
							<h1 class="to-animate">Foodee</h1>
							<h2 class="to-animate">Sức khỏe và sự hài lòng <span> với</span> <a href="#"
									target="_blank">Foodee.co</a></h2>
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
		<div class="js-sticky">
			<div class="main-nav">
				<div class="container-fluid">
					<div class="menu-1">
						<a class="active" href="#">Trang chủ</a>
						<a href="#">Giới thiệu</a>
						<a href="#">Thực đơn</a>
					</div>
					<div class="logo">
						<a href="#">Foodee</a>
					</div>
					<div class="menu-2">
						<a href="#">Ô tìm kiếm</a>
						<a href="{{ route('login') }}" class="header__login">Đăng nhập</a>
					</div>

				</div>

			</div>
		</div>

		<!-- Carousel -->
		<div class="banner__carousel">
			<div class="owl-carousel owl-theme">
				<div class="banner__carousel-item">
					<img src="https://media.foody.vn/images/beauty-upload-api-675x355-210408001004.jpg">
					<div id="owl-item-0" class="banner__carousel-text">
						<div class="banner__carousel-title">HEALTYTABLE X MỒI NGON ĐỈNH</div>
						<div class="banner__carousel-content">Ưu đãi đến 25%</div>

					</div>
				</div>
				<div class="banner__carousel-item">
					<img src="https://images.foody.vn/biz_banner/foody-upload-api-food-biz-210405101503.jpg">
					<div id="owl-item-1" class="banner__carousel-text">
						<div class="banner__carousel-title">Trang Tròn - Chà hiện đại, trà sữa & đồ ăn vặt.</div>
						<div class="banner__carousel-content">Giảm giá sâu</div>
					</div>
				</div>
				<div class="banner__carousel-item">
					<img src="https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg">
					<div id="owl-item-2" class="banner__carousel-text">
						<div class="banner__carousel-title">Foody App trên Mobile</div>
						<div class="banner__carousel-content">Khám phá, đặt bàn, giao tận nơi</div>
					</div>
				</div>
				<div class="banner__carousel-item">
					<img src="https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg">
					<div id="owl-item-2" class="banner__carousel-text">
						<div class="banner__carousel-title">Foody App trên Mobile</div>
						<div class="banner__carousel-content">Khám phá, đặt bàn, giao tận nơi</div>
					</div>
				</div>
			</div>

		</div>
		<!-- Featured dishes -->
		<div class="booking-table">
			<div class="container">
				<div class="row">
					<div class="bt-header">
						<div class="bt-header__book">
							<div class="bt-header__book-img">
								<img src="Home/images/0103-served-plate_128.png" />
							</div>
							<p class="bt-header__book-title">
								Món ăn nổi bật
							</p>
						</div>
						<div class="dishes__month">
							Tháng 5
						</div>
					</div>

				</div>
				<div class="bt-content">
					<div class="row">
						<div class="col-2-4">
							<div class="bt-content__item">
								<div class="restaurant">
									<a href="#">
										<img class="restaurant__img" src="{{url('Home/images/cha-ca.jpg')}}" alt="res">
										<div class="restaurant__info">
											<div class="restaurant__name">Chả cá Hà Nội</div>
											<div class="dish__description">Chả cá từ lâu đã trở thành món đặc sản
												riêng của Hà Nội. Những cái tên như chả cá Lã Vọng, chả cá Anh Vũ
												hay chả cá Lão Ngư được xem là những thương hiệu chả cá siêu ngon
												không thể không nhắc tới.</div>
										</div>
									</a>

								</div>
								<div class="restaurant__discount">
									<div class="restaurant__discount-item dishes__location">
										<i class="fas fa-map-marker-alt"></i>
										<span> Địa điểm hot ở Hà Nội </span>
									</div>
									<ul class="dish__location-list">
										<li class="dish__location-item">Chả cá Lã Vọng: 14 phố Chả Cá và 107 Nguyễn
											Trường Tộ</li>
										<li class="dish__location-item">Cửa hàng chả cá Anh Vũ : Số 120 K1 Giảng Võ,
											Quận Ba Đình.</li>
									</ul>
									<!-- <a href="#" class="restaurant__discount-more">
									Xem thêm ưu đãi...
								</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Booking( sale )  -->
			<div class="booking-table">
				<div class="container">
					<div class="row">
						<div class="bt-header">
							<div class="bt-header__book">
								<div class="bt-header__book-img --order">
									<img src="Home/images/svg/order.svg" alt="order" />
								</div>
								<p class="bt-header__book-title">
									Đặt bàn ưu đãi
								</p>
							</div>
							<div class="bt-header__search">
								<button class="bt-header__search-btn --category">
									<p>Tìm danh mục</p>
									<i class="fas fa-angle-down"></i>
								</button>
								<button class="bt-header__search-btn --hot">
									<p>Nổi bật</p>
									<i class="fas fa-angle-down"></i>
								</button>
							</div>
						</div>

					</div>
					<div class="bt-content">
						<div class="row">
							<div class="col-2-4">
								<div class="bt-content__item">
									<div class="restaurant">
										<a href="#">
											<img class="restaurant__img"
												src="https://images.foody.vn/res/g69/682572/prof/s1242x600/foody-mobile-20597405_50420552992-166-636386646715288764.jpg"
												alt="res">
											<div class="restaurant__info">
												<div class="restaurant__name">Lẩu Phan - Buffet Bò- Nguyễn Văn Cừ
												</div>
												<div class="restaurant__address">485 Nguyễn Văn Cừ, Long Biên, Hà Nội
												</div>
											</div>
										</a>

									</div>
									<div class="restaurant__discount">
										<div class="restaurant__discount-item">
											<i class="fas fa-tag"></i>
											<span> Ăn trưa - Đi 4 tính 3</span>
										</div>
										<a href="#" class="restaurant__discount-more">
											Xem thêm ưu đãi...
										</a>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Review -->
			<div class="review">
				<div class="container">
					<div class="row">
						<div id="review-nav-l" class="col-2-4 no-gutters">
							<div class="review__menu">
								<div class="review__menu-header">
									<div class="logo-icon">
										<!-- <img src='/images/icon-logo.png' /> -->

									</div>
									<h2>Khám phá</h2>
								</div>
								<div class="review__menu-category">
									<ul class="review__menu-category-list">
										<li class="review__menu-category-item --active">
											<span>Ở đâu</span>
											<i class="fas fa-angle-right"></i>
										</li>
										<li class="review__menu-category-item">
											<span>Khuyến mãi</span>
											<i class="fas fa-angle-right"></i>
										</li>
										<li class="review__menu-category-item">
											<span>Ăn gì</span>
											<i class="fas fa-angle-right"></i>
										</li>
										<li class="review__menu-category-item">
											<span>Thực đơn</span>
											<i class="fas fa-angle-right"></i>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-9-6 no-gutters">
							<div class="review-content">
								<div id="review-nav-r" class="review-content__header">
									<div class="review-content__header-box --left">
										<p class="--active">Mới nhất</p>
										<p>Gần tôi</p>
										<p>Đã lưu</p>
									</div>
									<div class="review-content__header-box">
										<!-- <div class="review__header-filter-text">Bộ lọc : </div> -->
										<div class="review-content__header-filter">
											<select name="phan-loai">
												<option value="danh-muc">-Danh mục-</option>
												<option value="sang-trong">Sang trọng</option>
												<option value="nha-hang">Nhà hàng</option>
												<option value="an-vat">Ăn vặt</option>
												<option value="do-uong">Đồ uống</option>
											</select>
										</div>
										<div class="review-content__header-filter">
											<select name="dia-diem">
												<option value="khu-vuc">-Khu vực-</option>
												<option value="ha-noi">Hà Nội</option>
												<option value="sai-gon">Sài gòn</option>
											</select>
										</div>
									</div>
								</div>
								<div class="review-content__container">
									<div class="small-row row">
										<div class="small-gutter col-lg-3">
											<div class="bt-content__item">
												<div class="restaurant">
													<a href="#">
														<img class="restaurant__img"
															src="https://images.foody.vn/res/g69/682572/prof/s1242x600/foody-mobile-20597405_50420552992-166-636386646715288764.jpg"
															alt="res">
														<div class="restaurant__info">
															<div class="restaurant__name">Lẩu Phan - Buffet Bò- Nguyễn
																Văn
																Cừ</div>
															<div class="restaurant__address">485 Nguyễn Văn Cừ, Long
																Biên,
																Hà Nội</div>
														</div>
													</a>

												</div>
												<div class="restaurant__discount">
													<div class="home-comment">
														<div class="home-comment__user">
															<div>
																<a href="#">
																	<img src="https://images.foody.vn/usr/g836/8359063/avt/c100x100/qhmai-avatar-114-637186600244578770.jpg"
																		alt="" class="home-comment__user-avatar">
																</a>
															</div>
															<div>
																<span>Mai quỳnh </span>
																<p>Quán sạch sẽ, đồ ăn và thức uống ngon miệng, phù hợp
																	với
																	túi
																	tiền. Nhân viên phục vụ chu đáo</p>
															</div>


														</div>
														<div class="home-comment__interactive">
															<div class="home-comment__interactive-box">
																<div class="home-comment__comment">
																	<i
																		class="home-comment__interactive-comment fas fa-comment"></i>
																	<span>3</span>
																</div>
																<div class="home-comment__comment">
																	<i
																		class="home-comment__interactive-comment fas fa-camera"></i>
																	<span>30</span>
																</div>
															</div>
															<div class="home-comment__interactive-box">
																<button class="home-comment__interactive-btn">
																	<span>Lưu</span>
																	<i class="fas fa-bookmark"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ... -->
			<div id="type" style="background-image: url(Home/images/slide_3.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-3 to-animate">
							<div class="type">
								<h3 class="with-icon icon-1">Review</h3>
								<p>Tập hợp cảm nhận về những quán ăn, món ăn. Đem lại sự lựa chọn hoàn hảo cho bạn.</p>
							</div>
						</div>
						<div class="col-md-3 to-animate">
							<div class="type">
								<h3 class="with-icon icon-2">Quán ăn</h3>
								<p>Quán ăn, nhà hàng ngon, nổi tiếng, thường xuyên có khuyến mãi, giúp bạn tiết kiệm chi
									phí một cách tối đa nhất.</p>
							</div>
						</div>
						<div class="col-md-3 to-animate">
							<div class="type">
								<h3 class="with-icon icon-3">Món ăn</h3>
								<p>Những món ăn hấp dẫn, ngon miệng, thu hút người mua trong tuần, trong tháng.</p>
							</div>
						</div>
						<div class="col-md-3 to-animate">
							<div class="type">
								<h3 class="with-icon icon-4">Thực đơn</h3>
								<p>Đem laị cho bạn thực đơn theo chế độ dinh dưỡng, phù hợp với công việc và lối sống
									của bạn.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row row-padded">
						<div class="col-md-12 text-center">
							<p class="to-animate">&copy; 2021 Healty LTC. <br>
							</p>
							<p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="social">
								<li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
								<li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
								<li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- jQuery -->
			<script src="Home/js/jquery.min.js"></script>
			<!-- jQuery Easing -->
			<script src="Home/js/jquery.easing.1.3.js"></script>
			<!-- Bootstrap -->
			<script src="Home/js/bootstrap.min.js"></script>
			<!-- Bootstrap DateTimePicker -->
			<script src="Home/js/moment.js"></script>
			<script src="Home/js/bootstrap-datetimepicker.min.js"></script>
			<!-- Waypoints -->
			<script src="Home/js/jquery.waypoints.min.js"></script>
			<!-- Stellar Parallax -->
			<script src="Home/js/jquery.stellar.min.js"></script>

			<!-- Flexslider -->
			<script src="Home/js/jquery.flexslider-min.js"></script>
			<script>
				$(function () {
					$('#date').datetimepicker();
				});
			</script>
			<!-- Wow - animation when scroll page -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
			<!-- Owl carousel -->
			<script src="vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
			<script src="Home/js/owl-carousel.js"></script>
			<!-- Main JS -->
			<script src="Home/js/main.js"></script>
			<script src="Home/js/home.js"></script>
</body>

</html>