@extends('Layouts.page')
@section('title', 'Foodee - Trang chủ')
@section('css')
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
<link rel="stylesheet" href="Home/css/modal.css">
@endsection
@section('js')
<!-- Modernizr JS -->
<script src="Home/js/modernizr-2.6.2.min.js"></script>
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
<!-- Modal -->
<script src="Home/js/micromodal.min.js"></script>
<!-- Wow - animation when scroll page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- Owl carousel -->
<script src="vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script src="Home/js/owl-carousel.js"></script>
<!-- Main JS -->
<script src="Home/js/main.js"></script>
<script src="Home/js/home.js"></script>
@endsection
@section('content')
{{-- Image intro --}}
<div id="container">
    @if (!Auth::check())
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
    @endif
    {{-- Header --}}
    @include('Layouts.header')


    <div>content</div>




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

    <!-- Modal test -->
    <div class="modal micromodal-slide" id="detail-dish-modal" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="detail-dish-modal-title">
                <header class="modal__header">
                    <h2 class="modal__title" id="detail-dish-modal-title">
                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="detail-dish-modal-content">
                    <img id="loading-img" src="/assets/images/loading.svg" width="30px" height="30px"
                        alt="loading"></img>
                    <div id="detail-dish-content"></div>
                </main>
            </div>
        </div>
    </div>
    @include('Layouts.footer')

    @endsection