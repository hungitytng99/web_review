@extends('Layouts.page')

@section('title', $user->name . ' | Foodee.local')

@section('css')
	<!-- Animate.css -->
	<link rel="stylesheet" href="/Home/css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="/Home/css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/Home/css/bootstrap.css">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- My css -->
	<link rel="stylesheet" href="/Base/css/base.css">
	<link rel="stylesheet" href="/Home/css/style.css">
	<link rel="stylesheet" href="/Home/css/header.css">

	<link rel="stylesheet" href="/Review/css/style.css">
@endsection

@section('js')
	<!-- Modernizr JS -->
	<script src="/Home/js/modernizr-2.6.2.min.js"></script>
	<!-- jQuery -->
	<script src="/Home/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/Home/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/Home/js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="/Home/js/moment.js"></script>
	<script src="/Home/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="/Home/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="/Home/js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="/Home/js/jquery.flexslider-min.js"></script>
	<!-- Modal -->
	<script src="/Home/js/micromodal.min.js"></script>
	<!-- Wow - animation when scroll page -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<!-- Owl carousel -->
	<script src="/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
	<script src="/Home/js/owl-carousel.js"></script>

	<script src="/Home/js/main.js"></script>
@endsection

@section('content')
<div id="container">
	@include('Layouts.header')
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-side col-2 p-0">
				<div class="side-nav shadow-sm bg-white sticky">
					<div class="user-info d-flex align-items-center shadow-sm bg-white">
						<img src="{{ url($user->avatar) }}" alt="avatar">
						<h3 class="pl-3">{{ $user->name }}</h3>
					</div>
					<ul>
						<li>
							<a class="item d-flex justify-content-between active">
								<span>Hoạt động</span>
								<span class="badge badge-pill badge-info">{{ count($reviews) }}</span>
							</a>
						</li>
						{{-- <li><a class="item">Hình ảnh</a></li> --}}
					</ul>
				</div>
            </div>
            <div class="col-10 review-list">
				<div class="top-nav sticky shadow-sm bg-white">
					<span>{{ count($reviews) }} Hoạt động</span>
				</div>
                @foreach ($reviews as $review)
                <div class="review-item shadow-sm bg-white">
                    <div class="header d-flex">
                        <img src="{{ url($user->avatar) }}" alt="avatar">
                        <div class="title flex-md-grow-1">
                            <a href="{{ url("/users/$user->id") }}">{{ $user->name }}</a>
                            <p class="dr mt-2 mb-1"><a href="#">{{ $review['dish'] }}</a> | <a href="#">{{ $review['restaurant'] }}</a></p>
                            <small>{{ date('d/m/Y', strtotime($review['date'])) }}</small>
                        </div>
                        <span class="rate">{{ $review['rate'] }}</span>
                    </div>
                    <hr>
                    <div class="comment">
                        <p>{{ $review['comment'] }}</p>
                    </div>
					<div class="pb-3">
						<small>- Đây là nhận xét từ Thành Viên trên Foodee -</small>
					</div>
                    <div class="images">
						@foreach ($review['images'] as $image)
						<div class="column">
                            <img class="w-100" src="{{ url($image) }}" alt="image">
                        </div>
						@endforeach
                    </div>
					<div class="toolbar d-flex">
						<a href="#" class="fas fa-heart"> Thích</a>
						<a href="#" class="fas fa-comment ml-4"> Bình luận</a>
						<a href="#" class="fas fa-exclamation-triangle ml-4"> Báo lỗi</a>
					</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
		
    @include('Layouts.footer')

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<script src="/Review/js/main.js"></script>

@endsection