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
    <div class="micro-header">
        <div class="micro-status-label"></div>
        <div class="main-image">
            <div class="img" style="height: 275px;">

                <a href="/nghe-an/xoi-bap-le-mao">
                    <img itemprop="image" class="pic-place"
                        src="https://images.foody.vn/res/g72/716712/prof/s576x330/foody-mobile-xoi-ngo-jpg.jpg"
                        onerror="this.onerror=null;this.src='/Style/images/deli-dish-no-image.png';"
                        style="width:488px;height: unset;" alt="Xôi Bắp - Lê Mao">
                </a>
            </div>

        </div>
        <div class="main-information disableSection">
            <div class="res-common" style="position: relative;">
                <div class="res-common-info" style="">
                    <div class="main-info-bg"></div>
                    <div class="breadcrum" style="margin-top:7px;margin-bottom:0; clear:both;width:100%;">
                        <div class="breadcrum-microsite">
                            <span itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <meta itemprop="position" content="1">
                                    <a itemprop="item" href="/nghe-an/dia-diem">
                                        <span itemprop="name">Nghệ An</span> »
                                    </a>
                                </span>



                                <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <meta itemprop="position" content="2">
                                    <a itemprop="item" href="/nghe-an/khu-vuc-thanh-pho-vinh">
                                        <span itemprop="name">Thành Phố Vinh</span> »
                                    </a>
                                </span>

                                <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <meta itemprop="position" content="3">
                                    <a itemprop="item" href="/nghe-an/khu-vuc-cong-vien-trung-tam"
                                        style="background:none!important;">
                                        <span itemprop="name">Khu vực Công Viên Trung Tâm </span>
                                    </a>
                                </span>
                            </span>

                        </div>


                        <div class="report-microsite btn-report-microsite" data-item-id="716712">
                            <a href="javascript:void(0)">
                                <span><i class="fa fa-exclamation-triangle"></i></span>
                                <span>Báo lỗi</span>
                            </a>
                        </div>
                    </div>
                    <div class="main-info-title">
                        <h1 itemprop="name" style="width: 600px;">Xôi Bắp - Lê Mao</h1>
                        <div class="category">
                            <div class="category-items" style="max-width:200px">
                                <a href="/nghe-an/food/an-vat-via-he" title="Ăn vặt/vỉa hè">Ăn vặt/vỉa hè</a>
                            </div>
                            <div class="category-cuisines">
                                <div class="cuisines-separator"> - </div>
                                <div itemprop="servesCuisine" class="cuisines-list"
                                    style="margin-right: 5px;max-width: 150px;padding-top:2px;">
                                    <a class="microsite-cuisine" style="color: #888;font-size: 12px;"
                                        href="/nghe-an/an-vat-via-he-phong-cach-viet-nam">
                                        Món Việt
                                    </a>

                                </div>
                                <div class="audiences" style="max-width: 150px;margin-top:3px;">

                                    -&nbsp;Sinh viên,&nbsp;Gia đình
                                </div>
                            </div>

                        </div>
                        <div id="basicinfo-sticker"></div>
                    </div>
                    <div id="res-summary-point">






                        <div class="microsite-points-summary">
                            <div class="microsite-point-group">
                                <div class="microsite-top-points">
                                    <div>
                                        <span class="avg-txt-highlight">8.0</span>
                                    </div>
                                    <div class="label">Giá cả</div>
                                </div>
                                <div class="microsite-top-points">
                                    <div>
                                        <span class="avg-txt-highlight">8.0</span>
                                    </div>
                                    <div class="label">Chất lượng</div>
                                </div>
                                <div class="microsite-top-points">
                                    <div>
                                        <span class="avg-txt-highlight">7.0</span>
                                    </div>
                                    <div class="label">Vị trí</div>
                                </div>
                                <div class="microsite-top-points">
                                    <div>
                                        <span class="avg-txt-highlight">7.0</span>
                                    </div>
                                    <div class="label">Phục vụ</div>
                                </div>
                                <div class="microsite-top-points">
                                    <div>
                                        <span class="avg-txt-highlight">7.0</span>
                                    </div>
                                    <div class="label">Không gian</div>
                                </div>
                            </div>
                            <div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"
                                class="microsite-top-points-block"
                                style="font-size:20px;position:absolute;width: 600px;">
                                <meta itemprop="worstRating" content="1">
                                <meta itemprop="bestRating" content="10">
                                <div itemprop="ratingValue" class="microsite-point-avg ">
                                    7.4
                                </div>
                                <div itemprop="reviewCount" class="microsite-review-count">1</div>
                                <div class="microsite-review-text">Bình luận</div>
                            </div>
                        </div>

                        <script type="text/javascript">
                        $(function() {
                            $(".rich-snippet-total-review span").hover(function() {
                                $(this).css("text-decoration", "underline");
                                $(this).css("cursor", "pointer");
                            }, function() {
                                $(this).css("text-decoration", "none");
                                $(this).css("cursor", "normal");
                            });

                            $(".rich-snippet-total-review span").click(function() {
                                window.location.href = "/nghe-an/xoi-bap-le-mao/binh-luan";
                            });
                        });
                        </script>



                    </div>
                    <div class="disableSection">
                        <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                            <div class="res-common-add">
                                <span class="fa fa-location-arrow locationicon"></span>
                                <span>
                                    <a href="/nghe-an/xoi-bap-le-mao/nearBy" target="_blank">
                                        <span itemprop="streetAddress">Lê Mao Kéo Dài ( Cạnh Trường Tiểu Học Hồng
                                            Sơn)</span>,
                                    </a>
                                </span>
                                <a class="linkmap" style="position: relative;"><i class="fa fa-map"
                                        aria-hidden="true"></i></a>
                                <span><a href="/nghe-an/khu-vuc-thanh-pho-vinh" title="Thành Phố Vinh"><span
                                            itemprop="addressLocality">Thành Phố Vinh</span></a></span>, <span
                                    itemprop="addressRegion">Nghệ An</span>
                            </div>

                        </div>

                        <div class="res-common-price">

                            <div class="micro-timesopen">
                                <span class="fa fa-clock-o houricon"></span>
                                <span class="itsclosed" style="color: #989898;" title="">Chưa mở cửa</span>
                                <span>&nbsp;06:00 - 10:00</span>

                                <span class="fa fa-exclamation-circle opening-time-btn"
                                    ng-click="ShowTime('716712')"></span>
                                <div id="opening-time-popup" class="opening-time-popup">
                                    <div class="opening-time-close"></div>
                                    <div class="opening-time-content">
                                        <!-- ngRepeat: item in TimeRanges -->
                                    </div>
                                </div>
                            </div>
                            <div class="res-common-minmaxprice">
                                <span class="fa fa-tag minmaxpriceicon"></span>
                                <span <!-- Carousel -->
                                    @php
                                    $carouselLists = [
                                    [
                                    'img' => 'Home/images/carousel_1.jpg',
                                    'linkTo' => '#',
                                    'title' => 'HEALTYTABLE X MỒI NGON ĐỈNH',
                                    'description' => 'Ưu đãi đến 25%',
                                    ],
                                    [
                                    'img' => 'Home/images/carousel_2.jpg',
                                    'linkTo' => '#',
                                    'title' => 'Foody App trên Mobile',
                                    'description' => 'Khám phá, đặt bàn, giao tận nơi',
                                    ],
                                    [
                                    'img' => 'Home/images/carousel_3.jpg',
                                    'linkTo' => '#',
                                    'title' => 'Trang Tròn - Chà hiện đại, trà sữa & đồ ăn vặt.',
                                    'description' => 'Giảm giá sâu',
                                    ],
                                    [
                                    'img' => 'Home/images/carousel_4.jpg',
                                    'linkTo' => '#',
                                    'title' => 'Hàng ngàn thương hiệu xịn khuyến mãi',
                                    'description' => 'Lên đến 50%',
                                    ],
                                    ];
                                    @endphp
                                    @include('Base.carousel',$carouselLists)


                                    <div id="type" style="background-image: url(Home/images/slide_3.jpg);"
                                        data-stellar-background-ratio="0.5">
                                        <div class="overlay"></div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3 to-animate">
                                                    <div class="type">
                                                        <h3 class="with-icon icon-1">Review</h3>
                                                        <p>Tập hợp cảm nhận về những quán ăn, món ăn. Đem lại sự lựa
                                                            chọn hoàn hảo cho bạn.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 to-animate">
                                                    <div class="type">
                                                        <h3 class="with-icon icon-2">Quán ăn</h3>
                                                        <p>Quán ăn, nhà hàng ngon, nổi tiếng, thường xuyên có khuyến
                                                            mãi, giúp bạn tiết kiệm chi
                                                            phí một cách tối đa nhất.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 to-animate">
                                                    <div class="type">
                                                        <h3 class="with-icon icon-3">Món ăn</h3>
                                                        <p>Những món ăn hấp dẫn, ngon miệng, thu hút người mua trong
                                                            tuần, trong tháng.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 to-animate">
                                                    <div class="type">
                                                        <h3 class="with-icon icon-4">Thực đơn</h3>
                                                        <p>Đem laị cho bạn thực đơn theo chế độ dinh dưỡng, phù hợp với
                                                            công việc và lối sống
                                                            của bạn.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal test -->
                                    <div class="modal micromodal-slide" id="detail-dish-modal" aria-hidden="true">
                                        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                                            <div class="modal__container" role="dialog" aria-modal="true"
                                                aria-labelledby="detail-dish-modal-title">
                                                <header class="modal__header">
                                                    <h2 class="modal__title" id="detail-dish-modal-title">
                                                    </h2>
                                                    <button class="modal__close" aria-label="Close modal"
                                                        data-micromodal-close></button>
                                                </header>
                                                <main class="modal__content" id="detail-dish-modal-content">
                                                    <img id="loading-img" src="/assets/images/loading.svg" width="30px"
                                                        height="30px" alt="loading"></img>
                                                    <div id="detail-dish-content"></div>
                                                </main>
                                            </div>
                                        </div>
                                    </div>
                                    @include('Layouts.footer')

                                    @endsection