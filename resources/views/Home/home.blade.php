@extends('Layouts.page')
@section('title', 'Foodee - Trang chủ')
@section('css')
<!-- Animate.css -->
<link rel="stylesheet" href="Homepage/css/animate.css">
<!-- Flexslider -->
<link rel="stylesheet" href="Homepage/css/flexslider.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="Homepage/css/bootstrap.css">

<!-- Fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<!-- Bootstrap cdn -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- My css -->
<link rel="stylesheet" href="Base/css/base.css">
<link rel="stylesheet" href="Homepage/css/style.css">
<link rel="stylesheet" href="Homepage/css/header.css">
<link rel="stylesheet" href="Homepage/css/homestyle.css">
<link rel="stylesheet" href="Homepage/css/modal.css">
@endsection

@section('js')
<!-- Modernizr JS -->
<script src="Homepage/js/modernizr-2.6.2.min.js"></script>
<!-- jQuery -->
<script src="Homepage/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="Homepage/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="Homepage/js/bootstrap.min.js"></script>
<!-- Bootstrap DateTimePicker -->
<script src="Homepage/js/moment.js"></script>
<script src="Homepage/js/bootstrap-datetimepicker.min.js"></script>
<!-- Waypoints -->
<script src="Homepage/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="Homepage/js/jquery.stellar.min.js"></script>

<!-- Flexslider -->
<script src="Homepage/js/jquery.flexslider-min.js"></script>
<!-- Modal -->
<script src="Homepage/js/micromodal.min.js"></script>
<!-- Wow - animation when scroll page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- Owl carousel -->
<script src="vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script src="Homepage/js/owl-carousel.js"></script>
<!-- Main JS -->
<script src="Homepage/js/main.js"></script>
<script src="Homepage/js/home.js"></script>
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
                        <h2 class="to-animate">Sức khỏe và sự hài lòng <span> với</span> <a href="#" target="_blank">Foodee.co</a></h2>
                    </div>
                </div>
            </div>
            <ul class="slides">
                <li style="background-image: url(Homepage/images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url(Homepage/images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url(Homepage/images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
            </ul>
        </div>
    </div>
    @endif
    {{-- Header --}}
    @include('Layouts.header')

    <!-- Carousel -->
    @php
    $carouselLists = [
    [
    'img' => 'Homepage/images/carousel_1.jpg',
    'linkTo' => '#',
    'title' => 'HEALTYTABLE X MỒI NGON ĐỈNH',
    'description' => 'Ưu đãi đến 25%',
    ],
    [
    'img' => 'Homepage/images/carousel_2.jpg',
    'linkTo' => '#',
    'title' => 'Foody App trên Mobile',
    'description' => 'Khám phá, đặt bàn, giao tận nơi',
    ],
    [
    'img' => 'Homepage/images/carousel_3.jpg',
    'linkTo' => '#',
    'title' => 'Trang Tròn - Chà hiện đại, trà sữa & đồ ăn vặt.',
    'description' => 'Giảm giá sâu',
    ],
    [
    'img' => 'Homepage/images/carousel_4.jpg',
    'linkTo' => '#',
    'title' => 'Hàng ngàn thương hiệu xịn khuyến mãi',
    'description' => 'Lên đến 50%',
    ],
    ];
    @endphp
    @include('Base.carousel',$carouselLists)

    <!-- Featured dishes -->

    <div class="booking-table">
        <div class="container">
            <div class="row">
                <div class="bt-header">
                    <div class="bt-header__book">
                        <div class="bt-header__book-img">
                            <img src="Homepage/images/0103-served-plate_128.png" />
                        </div>
                        <p class="bt-header__book-title">
                            Top 6 món ăn nổi bật
                        </p>
                    </div>
                    <div class="dishes__month">
                        Tháng 6
                    </div>
                </div>
            </div>
            <div class="bt-content">
                <div class="row">
                    <div id="outstanding-food"></div>
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
                            <img src="Homepage/images/svg/order.svg" alt="order" />
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
                <div class="row" id="sale-restaurants">
                </div>
                <div class="loading-restaurants">
                    <button class="bt-content__more" onclick="handleGetMoreRestaurants(this)">
                        Xem thêm
                    </button>
                    <div id="loading-more"></div>
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
                                <div class="small-gutter col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="bt-content__item">
                                        <div class="restaurant">
                                            <a href="#">
                                                <div class="restaurant__img-box">
                                                    <img class="restaurant__img" src="https://images.foody.vn/res/g69/682572/prof/s1242x600/foody-mobile-20597405_50420552992-166-636386646715288764.jpg" alt="res">
                                                </div>
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
                                                            <img src="https://images.foody.vn/usr/g836/8359063/avt/c100x100/qhmai-avatar-114-637186600244578770.jpg" alt="" class="home-comment__user-avatar">
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
                                                            <i class="home-comment__interactive-comment fas fa-comment"></i>
                                                            <span>3</span>
                                                        </div>
                                                        <div class="home-comment__comment">
                                                            <i class="home-comment__interactive-comment fas fa-camera"></i>
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
    <div id="type" style="background-image: url(Homepage/images/slide_3.jpg);" data-stellar-background-ratio="0.5">
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
                    <img id="loading-img" src="/assets/images/loading.svg" width="30px" height="30px" alt="loading"></img>
                    <div id="detail-dish-content"></div>
                </main>
            </div>
        </div>
    </div>
    @include('Layouts.footer')

    @endsection