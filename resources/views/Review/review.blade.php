@extends('Layouts.page')

@section('title', 'Foodee - Trang chủ')


@section('content')
{{-- Image intro --}}
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
                <li style="background-image: url(ReviewPage/images/slide_1.jpg);" data-stellar-background-ratio="0.5">
                </li>
                <li style="background-image: url(ReviewPage/images/slide_2.jpg);" data-stellar-background-ratio="0.5">
                </li>
                <li style="background-image: url(ReviewPage/images/slide_3.jpg);" data-stellar-background-ratio="0.5">
                </li>
            </ul>
        </div>
    </div>

    {{-- Header --}}
    @php
    $sang= 1 ;
    $trua=1;
    $chieu=1;
    $toi=1;
    $khuya=1;
    $nc=1;
    $cafe=1;
    $db=1;
    $khaivi=1;
    @endphp
    @include('Layouts.header')

    <div class="row review__detail">
        <div class="container">
            <div class="row">
                <div class="col-5 ">
                    <div class="review__img-box">
                        <img src="{{$restaurantDetail[0]->image}}" alt="trinh-coffee" class="review__img">
                    </div>
                </div>
                <div class="col-7 ">
                    <ul class="review__detail-list">
                        <div class="kind-restaurant">
                            <span> {{$restaurantDetail[0]->type}}</span>
                        </div>
                        <li class="review__detail-restaurant-name">
                            <h1>{{$restaurantDetail[0]->name}}
                            </h1>
                        </li>
                        <li class="review__detail-restaurant-location">
                            <p>{{$restaurantDetail[0]->location}}</p>
                        </li>
                        <li class="review__detail-restaurant-location">
                            <p>{{$restaurantDetail[0]->phone}}</p>
                        </li>
                        <div class="cost-restaurant">
                            <i></i>{{$min}} - {{$max}}
                        </div>
                        <div class="cost-restaurant">
                            <!-- <i></i>{{$restaurantDetail[0]->rate}} -->
                            @if($restaurantDetail[0]->rate ==1 ) <i class="fa fa-star" aria-hidden="true"
                                style="font-size:60px;color:#ffff00"></i>

                            @elseif($restaurantDetail[0]->rate==2)
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>

                            @elseif($restaurantDetail[0]->rate==3)
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>

                            @elseif($restaurantDetail[0]->rate==4)
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>

                            @elseif($restaurantDetail[0]->rate==5)
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>
                            <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>
                            @endif
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="booking-table">
        <div class="container">


            <div class="now-menu-restaurant">
                <div class="menu-restaurant-tab">
                    <div class="item active">Thực đơn</div>
                </div>
                <div class="row">
                    <div class="col-4" style="padding-right :0px">
                        <div class="menu-restaurant-category">
                            <div class="list-category" id="scroll-spy">
                                <div class="scrollbar-container ps">
                                    <div class="item"><span id="-1" title="Món Đang Giảm" class="item-link active">Danh
                                            sách các dạng món ăn </span></div>
                                    @foreach($disheds as $dished)
                                    @if($dished->type == 1 && $sang == 1 )
                                    <div class="item"><span id="1228514" title="Cà phê" class="item-link ">Bữa
                                            sáng</span>
                                    </div>
                                    @php
                                    $sang =0;
                                    @endphp
                                    @endif
                                    @endforeach

                                    @foreach($disheds as $dished)
                                    @if($dished->type == 2 && $trua == 1 )
                                    <div class="item"><span id="1228514" title="Cà phê" class="item-link ">Bữa
                                            Trưa</span>
                                    </div>
                                    @php
                                    $trua =0;
                                    @endphp
                                    @endif
                                    @endforeach

                                    @foreach($disheds as $dished)
                                    @if($dished->type == 3 && $chieu == 1 )
                                    <div class="item"><span id="1228514" title="Cà phê" class="item-link ">Bữa
                                            chiều</span>
                                    </div>
                                    @php
                                    $chieu =0;
                                    @endphp
                                    @endif
                                    @endforeach

                                    @foreach($disheds as $dished)
                                    @if($dished->type == 4 && $toi == 1 )
                                    <div class="item"><span id="1228514" title="Cà phê" class="item-link ">Bữa
                                            tối</span>
                                    </div>
                                    @php
                                    $toi =0;
                                    @endphp
                                    @endif
                                    @endforeach

                                    @foreach($disheds as $dished)
                                    @if($dished->type == 5 && $khuya == 1 )
                                    <div class="item"><span id="1228514" title="Cà phê" class="item-link ">Bữa
                                            khuya</span>
                                    </div>
                                    @php
                                    $khuya =0;
                                    @endphp
                                    @endif
                                    @endforeach

                                    @foreach($disheds as $dished)
                                    @if($dished->type == 6 && $sang == 1 )
                                    <div class="item"><span id="1228514" title="Cà phê" class="item-link ">Nước giải
                                            khát </span>
                                    </div>
                                    @php
                                    $sang =0;
                                    @endphp
                                    @endif
                                    @endforeach

                                    @foreach($disheds as $dished)
                                    @if($dished->type == 7 && $cafe == 1 )
                                    <div class="item"><span id="1228514" title="Cà phê" class="item-link ">cafe
                                        </span>
                                    </div>
                                    @php
                                    $cafe =0;
                                    @endphp
                                    @endif
                                    @endforeach

                                    @foreach($disheds as $dished)
                                    @if($dished->type == 8 && $db == 1 )
                                    <div class="item"><span id="1228514" title="Cà phê" class="item-link ">Món đặc biệt
                                        </span>
                                    </div>
                                    @php
                                    $db =0;
                                    @endphp
                                    @endif
                                    @endforeach
                                    @foreach($disheds as $dished)
                                    @if($dished->type == 8 && $khaivi == 1 )
                                    <div class="item"><span id="1228514" title="Cà phê" class="item-link ">Món khai vị
                                        </span>
                                    </div>
                                    @php
                                    $khaivi =0;
                                    @endphp
                                    @endif
                                    @endforeach

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

                        <div id="restaurant-item">
                            <div class="restaurant-item__group">
                                <div class="restaurant-item__group-title">Danh sách chi tiết </div>
                                <ul class="restaurant-item__group-list">
                                    @foreach($disheds as $dished)
                                    @php

                                    $price_old =round($dished->price*(100-$dished->sale_percent)/100)*1000;
                                    @endphp
                                    <li class="restaurant-item__group-item" onclick="showDetailDish(event,this)">
                                        <div class="item__img-box">
                                            <img src="{{$dished->image}}" alt="{{$dished->linkTo}}"
                                                class="restaurant-item__group-img"></img>
                                        </div>
                                        <div class="restaurant-item__group-name">{{$dished->name}}</div>
                                        <div class="restaurant-item__group-price">
                                            <div class="old-price">{{ $dished->price }}
                                                <span
                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                            </div>
                                            <div class="new-price">{{$price_old}}<span
                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>

                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 ">
                        @foreach ($reviews as $review)

                        <div class="review-item shadow-sm bg-white">
                            <div class="header d-flex">
                                <img src="{{ url($review->user_avatar) }}" alt="avatar">
                                <div class="title flex-md-grow-1">
                                    <a href="">{{ $review->user_name }}</a>
                                    <p class="dr mt-2 mb-1"><a href="#">{{ $review->dishes_name }}</a> | <a
                                            href="#">{{ $review->restaurant_name }}</a></p>

                                    <small>{{ date('d/m/Y', strtotime(16/7)) }}</small>
                                </div>
                                @if ($review->reviews_rate==1)
                                <i class="fa fa-star" aria-hidden="true" style="color:#ffff00"></i>

                                @elseif($review->reviews_rate==2)
                                <i class="fa fa-star" aria-hidden="true" style="color:#ffff00"></i>
                                <i class="fa fa-star" aria-hidden="true" style="font-size:24px;color:#ffff00"></i>

                                @elseif($review->reviews_rate==3)
                                <i class="fa fa-star" aria-hidden="true" style="color:#ffff00"></i>
                                <i class="fa fa-star" aria-hidden="true" style="font-size:24px;color:#ffff00"></i>
                                <i class="fa fa-star" aria-hidden="true" style="font-size:36px;color:#ffff00"></i>

                                @elseif($review->reviews_rate==4)
                                <i class="fa fa-star" aria-hidden="true" style="color:#ffff00"></i>
                                <i class="fa fa-star" aria-hidden="true" style="font-size:24px;color:#ffff00"></i>
                                <i class="fa fa-star" aria-hidden="true" style="font-size:36px;color:#ffff00"></i>
                                <i class="fa fa-star" aria-hidden="true" style="font-size:48px;color:#ffff00"></i>

                                @else
                                <i class="fa fa-star" aria-hidden="true" style="color:#ffff00"></i>
                                <i class="fa fa-star" aria-hidden="true" style="font-size:24px;color:#ffff00"></i>
                                <i class="fa fa-star" aria-hidden="true" style="font-size:36px;color:#ffff00"></i>
                                <i class="fa fa-star" aria-hidden="true" style="font-size:48px;color:#ffff00"></i>
                                <i class="fa fa-star" aria-hidden="true" style="font-size:60px;color:#ffff00"></i>

                                @endif
                                <!-- <span class="fa fa-star">{{ $review->reviews_rate }}</span> -->
                            </div>
                            <hr>
                            <div class="comment">
                                <p>{{ $review->comment }}</p>
                            </div>
                            <div class="pb-3">
                                <small>- Đây là nhận xét từ Thành Viên trên Foodee -</small>
                            </div>
                            <div class="images">
                                @foreach ($review_image as $image)
                                <div class="column">
                                    <img class="w-100" src="{{ url($image) }}" alt="image">
                                </div>
                                @endforeach
                            </div>
                            @if (Auth::check() == true)

                            <div class="toolbar d-flex">
                                <a href="#" class="fas fa-heart"> Thích</a>
                                <a href="#" class="fas fa-comment ml-4"> Bình luận</a>
                                <a href="#" class="fas fa-exclamation-triangle ml-4"> Báo lỗi</a>
                            </div>
                            @endif

                        </div>
                        @endforeach
                    </div>
                </div>
                @if (Auth::check() == true)
                <div class="container">

                    <form id="review-form" method="POST" action="/{{$Id}}">
                        @csrf
                        <div>
                            <input type="text" name="user_id" hidden value="@php echo Auth::user()->id; @endphp">
                        </div>
                        <div>
                            <input type="text" name="restaurant_id" hidden
                                value="<?php echo $restaurantDetail[0]->id?>">
                        </div>
                        <div>
                            <label>Món ăn bạn vừa thường thức </label>
                            <select name="dish_id">
                                @foreach($disheds as $dished)
                                <option value="{{$dished->id}}">{{$dished->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>Cảm nhận của bạn về nhà hàng</label>
                            <input class="comment__input" type="text" name="comment"
                                placeholder="Chất lượng phục vụ tốt">
                        </div>
                        <div>
                            <label>Chất lượng phục vụ</label>
                            <select name="rate">
                                <option value="5">Xuất sắc</option>
                                <option value="4">Rất tốt</option>
                                <option value="3">Cao</option>
                                <option value="2">Trung Bình</option>
                                <option value="1">Tồi</option>
                            </select>

                        </div>
                        <div>
                            <label>Images </label>
                            <input class="comment__input" type="text" name="images" placeholder="images">

                        </div>

                        <div class="review__submit">
                            <input type="submit" value="Comment" onclick="submitReview(event)">

                        </div>

                    </form>

                </div>
                @endif
            </div>


        </div>
    </div>

    <div>
        <div id="type" style="background-image: url(HomePage/images/slide_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlaybar"></div>
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
    @section('css')
    <!-- Animate.css -->
    <link rel="stylesheet" href="HomePage/css/animate.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="HomePage/css/flexslider.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="HomePage/css/bootstrap.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- My css -->

    <link rel="stylesheet" href="Review/css/style.css">
    <link rel="stylesheet" href="ReviewPage/css/foody.css">
    <link rel="stylesheet" href="ReviewPage/css/public.css">
    <link rel="stylesheet" href="ReviewPage/css/style.css">
    <link rel="stylesheet" href="ReviewPage/css/final.css">
    <link rel="stylesheet" href="Base/css/base.css">
    <link rel="stylesheet" href="HomePage/css/style.css">
    <link rel="stylesheet" href="HomePage/css/modal.css">
    <script src="/Review/js/main.js"></script>

    @endsection

    @section('js')
    <!-- Modal -->
    <script src="Homepage/js/micromodal.min.js"></script>
    <!-- jQuery -->
    <script src="HomePage/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="HomePage/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="HomePage/js/bootstrap.min.js"></script>
    <!-- Bootstrap DateTimePicker -->
    <script src="HomePage/js/moment.js"></script>
    <script src="HomePage/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Waypoints -->
    <script src="HomePage/js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="HomePage/js/jquery.stellar.min.js"></script>

    <!-- Flexslider -->
    <script src="HomePage/js/jquery.flexslider-min.js"></script>
    <script>
    $(function() {
        $('#date').datetimepicker();
    });
    </script>
    <!-- Wow - animation when scroll page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Owl carousel -->
    <script src="vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="HomePage/js/owl-carousel.js"></script>
    <!-- Main JS -->
    <script src="HomePage/js/main.js"></script>
    <script src="Homepage/js/home.js"></script>


    <!-- <script src="HomePage/js/home.js"></script> -->

    @endsection