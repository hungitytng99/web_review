@extends('Layouts.page')

@section('title', 'Foodee - Trang chủ')


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
                <li style="background-image: url(ReviewPage/images/slide_1.jpg);" data-stellar-background-ratio="0.5">
                </li>
                <li style="background-image: url(ReviewPage/images/slide_2.jpg);" data-stellar-background-ratio="0.5">
                </li>
                <li style="background-image: url(ReviewPage/images/slide_3.jpg);" data-stellar-background-ratio="0.5">
                </li>
            </ul>
        </div>
    </div>

    @endif
    {{-- Header --}}
    @include('Layouts.header')
    <div class="booking-table">
        <div class="container">
            <div class="row review__detail">
                <div class="col-5 ">
                    <div class="review__img-box">
                        <img src="{{$restaurantDetail[0]->image}}" alt="trinh-coffee" class="review__img">
                    </div>
                </div>
                <div class="col-7 ">
                    <ul class="review__detail-list">
                        <div class="kind-restaurant">
                            <span> Café/Dessert</span>
                        </div>
                        <li class="review__detail-restaurant-name">
                            <h1>{{$restaurantDetail[0]->name}}
                            </h1>
                        </li>
                        <li class="review__detail-restaurant-location">
                            <p>{{$restaurantDetail[0]->location}}</p>
                        </li>
                        <div class="cost-restaurant">
                            <i></i>17,000 - 25,000
                        </div>
                    </ul>
                </div>
            </div>

            <div class="now-menu-restaurant">
                <div class="menu-restaurant-tab">
                    <div class="item active">Thực đơn</div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="menu-restaurant-category">
                            <div class="list-category" id="scroll-spy">
                                <div class="scrollbar-container ps">
                                    <div class="item"><span id="-1" title="Món Đang Giảm" class="item-link active">Danh
                                            sách các món cùng quán</span></div>
                                    <div class="item"><span id="1228514" title="Cà phê" class="item-link ">Cà phê</span>
                                    </div>
                                    <div class="item"><span id="1228515" title="Sinh tố hoa quả" class="item-link ">Sinh
                                            tố hoa quả</span></div>
                                    <div class="item"><span id="1228516" title="Nước ép hoa quả tươi"
                                            class="item-link ">Nước ép hoa quả tươi</span></div>
                                    <div class="item"><span id="1228519" title="Trà nhiệt đới các loại"
                                            class="item-link ">Trà nhiệt đới các loại</span></div>
                                    <div class="item"><span id="1318303" title="Sữa đặc biệt các loại"
                                            class="item-link ">Sữa đặc biệt các loại</span></div>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <!-- <div class="search-items">
                                    <p class="input-group"><i class="fas fa-search"></i><input type="search"
                                            name="searchKey" placeholder="Tìm món" value=""></p>
                                </div> -->
                        <div id="restaurant-item">
                            <div class="restaurant-item__group">
                                <div class="restaurant-item__group-title">Danh sách chi tiết </div>
                                <ul class="restaurant-item__group-list">
                                    @foreach($disheds as $dished)
                                    <li class="restaurant-item__group-item">
                                        <div class="item__img-box">
                                            <img src="{{$dished->image}}" alt="{{$dished->linkTo}}"
                                                class="restaurant-item__group-img"></img>
                                        </div>
                                        <div class="restaurant-item__group-name">{{$dished->name}}</div>
                                        <div class="restaurant-item__group-price">
                                            <div class="old-price">{{$dished->price}} <span
                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                            </div>
                                            <div class="new-price">10000<span
                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    <li class="restaurant-item__group-item">
                                        <div class="item__img-box">
                                            <img src="https://images.foody.vn/res/g27/269188/s120x120/7d8331f7-96fb-4376-be0b-75ef75e2-022b0ed4-201014091131.jpeg"
                                                alt="nau-lac" class="restaurant-item__group-img"></img>
                                        </div>
                                        <div class="restaurant-item__group-name">Nâu lắc</div>
                                        <div class="restaurant-item__group-price">
                                            <div class="old-price">15000 <span
                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                            </div>
                                            <div class="new-price">10000<span
                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel -->
        @php
        $carouselLists = [
        [
        'img' => 'Home/images/carousel_1.jpg',
        'linkTo' => '#',
        'user' => 'VU',
        'comment' => 'on ap ',
        ],
        [
        'img' => 'Home/images/carousel_2.jpg',
        'linkTo' => '#',
        'user' => 'hung',
        'comment' => 'k ngon ',
        ],
        [
        'img' => 'Home/images/carousel_3.jpg',
        'linkTo' => '#',
        'user' => 'vinh',
        'comment' => 'nhu shit',
        ],
        ];
        @endphp
        @include('ReviewBanner.carousel',$carouselLists)

        <div id="type" style="background-image: url(Home/images/slide_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 to-animate">
                        <div class="type">
                            <h3 class="with-icon icon-1">Review</h3>
                            <p>Tập hợp cảm nhận về những quán ăn, món ăn. Đem lại sự lựa chọn hoàn hảo cho bạn.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 to-animate">
                        <div class="type">
                            <h3 class="with-icon icon-2">Quán ăn</h3>
                            <p>Quán ăn, nhà hàng ngon, nổi tiếng, thường xuyên có khuyến mãi, giúp bạn tiết kiệm
                                chi
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
                            <p>Đem laị cho bạn thực đơn theo chế độ dinh dưỡng, phù hợp với công việc và lối
                                sống
                                của bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Layouts.footer')
@endsection
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

<!-- <link rel="stylesheet" href="ReviewPage/css/foode.css"> -->
<link rel="stylesheet" href="ReviewPage/css/foody.css">
<link rel="stylesheet" href="ReviewPage/css/public.css">
<link rel="stylesheet" href="ReviewPage/css/style.css">
<link rel="stylesheet" href="ReviewPage/css/final.css">
<link rel="stylesheet" href="Base/css/base.css">
<link rel="stylesheet" href="Home/css/style.css">
<link rel="stylesheet" href="Home/css/modal.css">
@endsection

@section('js')

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
<!-- <script src="Home/js/home.js"></script> -->
@endsection