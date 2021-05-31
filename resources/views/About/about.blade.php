@extends('Layouts.page')

@section('title', 'Foodee - Trang chủ')

@section('css')
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

	<link rel="stylesheet" href="About/css/style.css">
@endsection

@section('js')
	<script src="Home/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
@endsection

@section('content')
<div id="container">
	@include('Layouts.header')

    <main>
		<section id="section-overview">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-md-10">

						@if (session('status-success-1'))
						<div class="alert alert-success auto-hide" role="alert">
						  {{ session('status-success-1') }}
						</div>
						@endif
	  
						@if (session('status-error-1'))
						<div class="alert alert-danger auto-hide" role="alert">
						  {{ session('status-error-1') }}
						</div>
						@endif

						<h1 class="section-title mb-5">FOODEE LÀ GÌ?</h1>
						<p class="section-subtitle mb-5">
							Được xây dựng từ năm 2021, Foodee là <u><b>cộng đồng tin cậy</b></u> cho mọi người có thể tìm kiếm, đánh giá, bình luận các địa 
							điểm ăn uống: nhà hàng, quán ăn, cafe, tiệm bánh... tại Việt Nam cũng như lên thực đơn phù hợp với bản thân cho từng ngày.
						</p>
						<p class="section-subtitle">
							Tất cả thành viên từ Bắc đến Nam, Foodee kết nối những thực khách đến với các địa điểm ăn uống lớn nhỏ cả đất nước.
						</p>
						<div class="mt-5">
							<a href="#section-contact" class="btn primary">Liên hệ ngay</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="section-image">
		</section>
		<section id="section-features">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-md py-5 card border-0">
						<i class="fas fa-sort-amount-up card-img"></i>
						<div class="card-body">
							<h3 class="card-title text-center">Phân loại rõ ràng</h3>
							<p class="card-text text-center">
								Foodee phân loại các địa điểm ra rất chi tiết: theo mục đích, loại hình, món ăn, giá cả, loại ẩm thực...
							</p>
						</div>
					</div>
					<div class="col-md py-5 card border-0">
						<i class="far fa-list-alt card-img"></i>
						<div class="card-body">
							<h3 class="card-title text-center">Thực đơn thông minh</h3>
							<p class="card-text text-center">
								Foodee lên thực đơn hằng ngày phù hợp với thông tin của người dùng.
							</p>
						</div>
					</div>
					<div class="col-md py-5 card border-0">
						<i class="far fa-comment-alt card-img"></i>
						<div class="card-body">
							<h3 class="card-title text-center">Bình luận & Đánh giá</h3>
							<p class="card-text text-center">
								Foodee cho phép thành viên chèn hình ảnh vào bình luận, đánh giá địa điểm với nhiều tiêu chí.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="section-devs">
			<div class="container">
				<div id="carousel-devs" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row justify-content-md-center">
								<div class="col-md-8">
									<div class="dev-image">
										<img src="About/assets/vinh.png" alt="vinh.png">
									</div>
									<div class="dev-text pb-5">
										<p>
											Chào buổi sáng. Mình rất vui khi được chung tay xây dựng trang web này. Nếu có thắc mắc hãy liên hệ với chúng mình nhé.
										</p>
									</div>
									<div class="dev-name pb-4">
										<p>Trần Mạnh Hùng</p>
									</div>
									<div class="dev-desk">
										<p>Trưởng nhóm - Lập trình viên</p>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-md-center">
								<div class="col-md-8">
									<div class="dev-image">
										<img src="About/assets/vinh.png" alt="vinh.png">
									</div>
									<div class="dev-text pb-5">
										<p>
											Chào buổi sáng. Mình rất vui khi được chung tay xây dựng trang web này. Nếu có thắc mắc hãy liên hệ với chúng mình nhé.
										</p>
									</div>
									<div class="dev-name pb-4">
										<p>Quế Hoài Vũ</p>
									</div>
									<div class="dev-desk">
										<p>Lập trình viên</p>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-md-center">
								<div class="col-md-8">
									<div class="dev-image">
										<img src="About/assets/vinh.png" alt="vinh.png">
									</div>
									<div class="dev-text pb-5">
										<p>
											Chào buổi sáng. Tôi rất vui khi được chung tay xây dựng trang web này. Nếu có thắc mắc gì hãy liên hệ với chúng tôi nhé.
										</p>
									</div>
									<div class="dev-name pb-4">
										<p>Lê Bá Vinh</p>
									</div>
									<div class="dev-desk">
										<p>Lập trình viên</p>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carousel-devs" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel-devs" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
				  	</div>
				</div>
			</div>
		</section>
		<section id="section-contact">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<h1 class="section-title text-center pb-4 mb-5">Liên hệ với chúng tôi</h1>
						<form action="{{ url('/about') }}" method="POST">
							@csrf
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="name">Tên</label>
    									<input type="text" class="form-control" id="name" name="name" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="email">Email</label>
    									<input type="email" class="form-control" id="email" name="email" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="phone">Số điện thoại</label>
    									<input type="tel" class="form-control" id="phone" name="phone" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="message">Tin nhắn</label>
										<textarea class="form-control" id="message" name="message" rows="7" required></textarea>
									</div>
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-md text-center">
									<input type="submit" class="btn primary" value="Gửi">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</main>
		
    @include('Layouts.footer')

	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<script src="About/js/main.js"></script>

    <!-- jQuery -->
    <script src="Home/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="Home/js/jquery.easing.1.3.js"></script>
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
        $(function() {
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
@endsection