@extends('Layouts.page')

@section('title', 'Foodee - Trang chủ')

@section('content')
{{-- Image intro --}}
<link rel="stylesheet" href="Review/css/foode.css">
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
                <li style="background-image: url(Review/images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url(Review/images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url(Review/images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
            </ul>
        </div>
    </div>
    @endif
    {{-- Header --}}
    @include('Layouts.header')
<<<<<<< HEAD
=======

    <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" herf="style.css">
    <title> web </title>
</head>
<body>
    <section class="top">
        <div class="container">
            <div class="row justify-content">
                <div class="logo"><img src="Review/image/slide_1.jpg" alt=""></div>
                <div class="menu-bar">
                    <span></span>
                </div>
            </div>  
        </div>
    </section>

    <script src="Review/js/script.js"></script>
</body>
</html> -->
>>>>>>> d8834365ab862e63a09f9124326203b7ef540dc0
    <div class="booking-table">

        <div class="container">
            <div class="now-detail-restaurant clearfix">
                <div class="container">
                    <div class="detail-restaurant-img">
                        <img src="Review/images/cafe.jpg" alt="Trịnh Coffee" class="">
                    </div>
                    <div class="detail-restaurant-info">
<<<<<<< HEAD
                        <!-- <nav aria-label="breadcrumb">
=======
                        <nav aria-label="breadcrumb">
>>>>>>> d8834365ab862e63a09f9124326203b7ef540dc0
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="breadcrumb-link" rel="nofollow" href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a class="breadcrumb-link" rel="nofollow" href="/nghe-an">Nghệ An</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a class="breadcrumb-link" rel="nofollow" href="/nghe-an/trinh-coffee">Trịnh
                                        Coffee</a>
                                </li>
                            </ol>
<<<<<<< HEAD
                        </nav> -->
                        dd($restaurant_id);
                        @foreach($restaurants as $restaurant)
                        <div class="kind-restaurant">
                            <span> Café/Dessert</span>
                        </div>
                        <h1 class="name-restaurant">{{$restaurant->name}}</h1>
                        <div class="address-restaurant">{{$restaurant->location}}</div>
=======
                        </nav>
                        <div class="kind-restaurant">
                            <span> Café/Dessert</span>
                        </div>
                        <h1 class="name-restaurant">Trịnh Coffee</h1>
                        <div class="address-restaurant">59 Trần Huy Liệu, Tp. Vinh, Nghệ An</div>
>>>>>>> d8834365ab862e63a09f9124326203b7ef540dc0
                        <div class="status-restaurant">
                            <div class="opentime-status">
                                <span class="stt offline" title="Đã đóng">

                                </span>
                            </div>
                        </div>
                        <div class="cost-restaurant">
                            <i class="fas fa-dollar-sign"></i>17,000 - 25,000
                        </div>
<<<<<<< HEAD
                        @endforeach
=======
>>>>>>> d8834365ab862e63a09f9124326203b7ef540dc0
                    </div>
                </div>
            </div>
            <div class="now-menu-restaurant">
                <div class="menu-restaurant-tab">
                    <div class="item active">Thực đơn</div>
                </div>
                <div class="menu-restaurant-content-tab">
                    <div class="menu-restaurant-container">
<<<<<<< HEAD
                        <div class="menu-restaurant-category">
=======
                        <<<<<<< Updated upstream <div class="menu-restaurant-categor">
                            >>>>>>> Stashed changes
>>>>>>> d8834365ab862e63a09f9124326203b7ef540dc0
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
<<<<<<< HEAD
                        </div>
                        <div class="menu-restaurant-detail">
                            <div class="menu-restaurant-list">
                                <div class="search-items">
                                    <p class="input-group"><i class="fas fa-search"></i><input type="search"
                                            name="searchKey" placeholder="Tìm món" value=""></p>
                                </div>
                                <div id="restaurant-item">
                                    <div aria-label="grid" aria-readonly="true"
                                        class="ReactVirtualized__Grid ReactVirtualized__List" role="grid" tabindex="0"
                                        style="box-sizing: border-box; direction: ltr; height: auto; position: relative; width: 558px; will-change: transform; overflow: auto; outline: none;">
                                        <div class="ReactVirtualized__Grid__innerScrollContainer" role="rowgroup"
                                            style="width: auto; height: 2486px; max-width: 558px; max-height: 2486px; overflow: hidden; position: relative;">
                                            <div class="menu-group" id="section-group-menu--1"
                                                style="height: 56px; left: 0px; position: absolute; top: 0px; width: 100%;">
                                                <div class="title-menu">Món Đang Giảm</div>
                                            </div>
                                            <div class="item-restaurant-row"
                                                style="height: 81px; left: 0px; position: absolute; top: 56px; width: 100%;">
                                                <div class="row">
                                                    <div class="col-auto item-restaurant-img"><button
                                                            class="inline"><img
                                                                src="https://images.foody.vn/res/g27/269188/s120x120/7d8331f7-96fb-4376-be0b-75ef75e2-022b0ed4-201014091131.jpeg"
                                                                alt="Nâu lắc" width="60" height="60"></button></div>
                                                    <div class="col item-restaurant-info">
                                                        <h2 class="item-restaurant-name">Nâu lắc</h2>
                                                    </div>
                                                    <div class="col-auto item-restaurant-more">
                                                        <div class="row ">
                                                            <div class="col-auto product-price">
                                                                <div class="old-price">15,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                                <div class="current-price">10,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto adding-food-cart txt-right">
                                                                <div class="btn-adding">+</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-restaurant-row"
                                                style="height: 81px; left: 0px; position: absolute; top: 137px; width: 100%;">
                                                <div class="row">
                                                    <div class="col-auto item-restaurant-img"><button
                                                            class="inline"><img
                                                                src="https://images.foody.vn/res/g27/269188/s120x120/b19d2a32-4103-4bd5-9f1b-5896720b90b6.jpeg"
                                                                alt="Cafe Nâu xay nguyên chất" width="60"
                                                                height="60"></button></div>
                                                    <div class="col item-restaurant-info">
                                                        <h2 class="item-restaurant-name">Cafe Nâu xay nguyên chất</h2>
                                                    </div>
                                                    <div class="col-auto item-restaurant-more">
                                                        <div class="row ">
                                                            <div class="col-auto product-price">
                                                                <div class="old-price">20,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                                <div class="current-price">10,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto adding-food-cart txt-right">
                                                                <div class="btn-adding">+</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-restaurant-row"
                                                style="height: 81px; left: 0px; position: absolute; top: 218px; width: 100%;">
                                                <div class="row">
                                                    <div class="col-auto item-restaurant-img"><button
                                                            class="inline"><img
                                                                src="https://images.foody.vn/res/g27/269188/s120x120/2b41f95d-95bd-4409-a85e-75b7d5d0-53ac5964-201014091619.jpeg"
                                                                alt="Đen phin truyền thống" width="60"
                                                                height="60"></button></div>
                                                    <div class="col item-restaurant-info">
                                                        <h2 class="item-restaurant-name">Đen phin truyền thống</h2>
                                                    </div>
                                                    <div class="col-auto item-restaurant-more">
                                                        <div class="row ">
                                                            <div class="col-auto product-price">
                                                                <div class="old-price">20,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                                <div class="current-price">10,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto adding-food-cart txt-right">
                                                                <div class="btn-adding">+</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-restaurant-row"
                                                style="height: 81px; left: 0px; position: absolute; top: 299px; width: 100%;">
                                                <div class="row">
                                                    <div class="col-auto item-restaurant-img"><button
                                                            class="inline"><img
                                                                src="https://images.foody.vn/res/g27/269188/s120x120/630bfef0-48d1-4fe5-9c09-cfb62d3dd526.jpeg"
                                                                alt="Cafe Đen xay nguyên chất" width="60"
                                                                height="60"></button></div>
                                                    <div class="col item-restaurant-info">
                                                        <h2 class="item-restaurant-name">Cafe Đen xay nguyên chất</h2>
                                                    </div>
                                                    <div class="col-auto item-restaurant-more">
                                                        <div class="row ">
                                                            <div class="col-auto product-price">
                                                                <div class="old-price">20,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                                <div class="current-price">10,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto adding-food-cart txt-right">
                                                                <div class="btn-adding">+</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-restaurant-row"
                                                style="height: 81px; left: 0px; position: absolute; top: 380px; width: 100%;">
                                                <div class="row">
                                                    <div class="col-auto item-restaurant-img"><button
                                                            class="inline"><img
                                                                src="https://images.foody.vn/res/g27/269188/s120x120/569af9f7-0c8d-47cd-a3d7-803f4d27-d02992ab-201014092100.jpeg"
                                                                alt="Nâu phin truyền thống" width="60"
                                                                height="60"></button></div>
                                                    <div class="col item-restaurant-info">
                                                        <h2 class="item-restaurant-name">Nâu phin truyền thống</h2>
                                                    </div>
                                                    <div class="col-auto item-restaurant-more">
                                                        <div class="row ">
                                                            <div class="col-auto product-price">
                                                                <div class="old-price">20,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                                <div class="current-price">10,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto adding-food-cart txt-right">
                                                                <div class="btn-adding">+</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-group" id="section-group-menu-1228514"
                                                style="height: 56px; left: 0px; position: absolute; top: 461px; width: 100%;">
                                                <div class="title-menu">Cà phê</div>
                                            </div>
                                            <div class="item-restaurant-row"
                                                style="height: 81px; left: 0px; position: absolute; top: 517px; width: 100%;">
                                                <div class="row">
                                                    <div class="col-auto item-restaurant-img"><button
                                                            class="inline"><img
                                                                src="https://images.foody.vn/res/g27/269188/s120x120/7d8331f7-96fb-4376-be0b-75ef75e2-022b0ed4-201014091131.jpeg"
                                                                alt="Nâu lắc" width="60" height="60"></button></div>
                                                    <div class="col item-restaurant-info">
                                                        <h2 class="item-restaurant-name">Nâu lắc</h2>
                                                    </div>
                                                    <div class="col-auto item-restaurant-more">
                                                        <div class="row ">
                                                            <div class="col-auto product-price">
                                                                <div class="old-price">15,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                                <div class="current-price">10,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto adding-food-cart txt-right">
                                                                <div class="btn-adding">+</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-restaurant-row"
                                                style="height: 81px; left: 0px; position: absolute; top: 598px; width: 100%;">
                                                <div class="row">
                                                    <div class="col-auto item-restaurant-img"><button
                                                            class="inline"><img
                                                                src="https://images.foody.vn/res/g27/269188/s120x120/b19d2a32-4103-4bd5-9f1b-5896720b90b6.jpeg"
                                                                alt="Cafe Nâu xay nguyên chất" width="60"
                                                                height="60"></button></div>
                                                    <div class="col item-restaurant-info">
                                                        <h2 class="item-restaurant-name">Cafe Nâu xay nguyên chất</h2>
                                                    </div>
                                                    <div class="col-auto item-restaurant-more">
                                                        <div class="row ">
                                                            <div class="col-auto product-price">
                                                                <div class="old-price">20,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                                <div class="current-price">10,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto adding-food-cart txt-right">
                                                                <div class="btn-adding">+</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-restaurant-row"
                                                style="height: 81px; left: 0px; position: absolute; top: 679px; width: 100%;">
                                                <div class="row">
                                                    <div class="col-auto item-restaurant-img"><button
                                                            class="inline"><img
                                                                src="https://images.foody.vn/res/g27/269188/s120x120/bc914ac9-919f-44bd-8ea6-1e57af7c-e1473a8f-201014091014.jpeg"
                                                                alt="Bạc xỉu" width="60" height="60"></button></div>
                                                    <div class="col item-restaurant-info">
                                                        <h2 class="item-restaurant-name">Bạc xỉu</h2>
                                                    </div>
                                                    <div class="col-auto item-restaurant-more">
                                                        <div class="row ">
                                                            <div class="col-auto product-price">
                                                                <div class="current-price">20,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto adding-food-cart txt-right">
                                                                <div class="btn-adding">+</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-restaurant-row"
                                                style="height: 81px; left: 0px; position: absolute; top: 760px; width: 100%;">
                                                <div class="row">
                                                    <div class="col-auto item-restaurant-img"><button
                                                            class="inline"><img
                                                                src="https://images.foody.vn/res/g27/269188/s120x120/2b41f95d-95bd-4409-a85e-75b7d5d0-53ac5964-201014091619.jpeg"
                                                                alt="Đen phin truyền thống" width="60"
                                                                height="60"></button></div>
                                                    <div class="col item-restaurant-info">
                                                        <h2 class="item-restaurant-name">Đen phin truyền thống</h2>
                                                    </div>
                                                    <div class="col-auto item-restaurant-more">
                                                        <div class="row ">
                                                            <div class="col-auto product-price">
                                                                <div class="old-price">20,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                                <div class="current-price">10,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto adding-food-cart txt-right">
                                                                <div class="btn-adding">+</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-restaurant-row"
                                                style="height: 81px; left: 0px; position: absolute; top: 841px; width: 100%;">
                                                <div class="row">
                                                    <div class="col-auto item-restaurant-img"><button
                                                            class="inline"><img
                                                                src="https://images.foody.vn/res/g27/269188/s120x120/630bfef0-48d1-4fe5-9c09-cfb62d3dd526.jpeg"
                                                                alt="Cafe Đen xay nguyên chất" width="60"
                                                                height="60"></button></div>
                                                    <div class="col item-restaurant-info">
                                                        <h2 class="item-restaurant-name">Cafe Đen xay nguyên chất</h2>
                                                    </div>
                                                    <div class="col-auto item-restaurant-more">
                                                        <div class="row ">
                                                            <div class="col-auto product-price">
                                                                <div class="old-price">20,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                                <div class="current-price">10,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto adding-food-cart txt-right">
                                                                <div class="btn-adding">+</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-restaurant-row"
                                                style="height: 81px; left: 0px; position: absolute; top: 922px; width: 100%;">
                                                <div class="row">
                                                    <div class="col-auto item-restaurant-img"><button
                                                            class="inline"><img
                                                                src="https://images.foody.vn/res/g27/269188/s120x120/569af9f7-0c8d-47cd-a3d7-803f4d27-d02992ab-201014092100.jpeg"
                                                                alt="Nâu phin truyền thống" width="60"
                                                                height="60"></button></div>
                                                    <div class="col item-restaurant-info">
                                                        <h2 class="item-restaurant-name">Nâu phin truyền thống</h2>
                                                    </div>
                                                    <div class="col-auto item-restaurant-more">
                                                        <div class="row ">
                                                            <div class="col-auto product-price">
                                                                <div class="old-price">20,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                                <div class="current-price">10,000<span
                                                                        style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto adding-food-cart txt-right">
                                                                <div class="btn-adding">+</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-group" id="section-group-menu-1228515"
                                                style="height: 56px; left: 0px; position: absolute; top: 1003px; width: 100%;">
                                                <div class="title-menu">Sinh tố hoa quả</div>
                                            </div>
=======
                    </div>
                    <div class="menu-restaurant-detail">
                        <div class="menu-restaurant-list">
                            <div class="search-items">
                                <p class="input-group"><i class="fas fa-search"></i><input type="search"
                                        name="searchKey" placeholder="Tìm món" value=""></p>
                            </div>
                            <div id="restaurant-item">
                                <div aria-label="grid" aria-readonly="true"
                                    class="ReactVirtualized__Grid ReactVirtualized__List" role="grid" tabindex="0"
                                    style="box-sizing: border-box; direction: ltr; height: auto; position: relative; width: 558px; will-change: transform; overflow: auto; outline: none;">
                                    <div class="ReactVirtualized__Grid__innerScrollContainer" role="rowgroup"
                                        style="width: auto; height: 2486px; max-width: 558px; max-height: 2486px; overflow: hidden; position: relative;">
                                        <div class="menu-group" id="section-group-menu--1"
                                            style="height: 56px; left: 0px; position: absolute; top: 0px; width: 100%;">
                                            <div class="title-menu">Món Đang Giảm</div>
                                        </div>
                                        <div class="item-restaurant-row"
                                            style="height: 81px; left: 0px; position: absolute; top: 56px; width: 100%;">
                                            <div class="row">
                                                <div class="col-auto item-restaurant-img"><button class="inline"><img
                                                            src="https://images.foody.vn/res/g27/269188/s120x120/7d8331f7-96fb-4376-be0b-75ef75e2-022b0ed4-201014091131.jpeg"
                                                            alt="Nâu lắc" width="60" height="60"></button></div>
                                                <div class="col item-restaurant-info">
                                                    <h2 class="item-restaurant-name">Nâu lắc</h2>
                                                </div>
                                                <div class="col-auto item-restaurant-more">
                                                    <div class="row ">
                                                        <div class="col-auto product-price">
                                                            <div class="old-price">15,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                            <div class="current-price">10,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto adding-food-cart txt-right">
                                                            <div class="btn-adding">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-restaurant-row"
                                            style="height: 81px; left: 0px; position: absolute; top: 137px; width: 100%;">
                                            <div class="row">
                                                <div class="col-auto item-restaurant-img"><button class="inline"><img
                                                            src="https://images.foody.vn/res/g27/269188/s120x120/b19d2a32-4103-4bd5-9f1b-5896720b90b6.jpeg"
                                                            alt="Cafe Nâu xay nguyên chất" width="60"
                                                            height="60"></button></div>
                                                <div class="col item-restaurant-info">
                                                    <h2 class="item-restaurant-name">Cafe Nâu xay nguyên chất</h2>
                                                </div>
                                                <div class="col-auto item-restaurant-more">
                                                    <div class="row ">
                                                        <div class="col-auto product-price">
                                                            <div class="old-price">20,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                            <div class="current-price">10,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto adding-food-cart txt-right">
                                                            <div class="btn-adding">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-restaurant-row"
                                            style="height: 81px; left: 0px; position: absolute; top: 218px; width: 100%;">
                                            <div class="row">
                                                <div class="col-auto item-restaurant-img"><button class="inline"><img
                                                            src="https://images.foody.vn/res/g27/269188/s120x120/2b41f95d-95bd-4409-a85e-75b7d5d0-53ac5964-201014091619.jpeg"
                                                            alt="Đen phin truyền thống" width="60" height="60"></button>
                                                </div>
                                                <div class="col item-restaurant-info">
                                                    <h2 class="item-restaurant-name">Đen phin truyền thống</h2>
                                                </div>
                                                <div class="col-auto item-restaurant-more">
                                                    <div class="row ">
                                                        <div class="col-auto product-price">
                                                            <div class="old-price">20,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                            <div class="current-price">10,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto adding-food-cart txt-right">
                                                            <div class="btn-adding">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-restaurant-row"
                                            style="height: 81px; left: 0px; position: absolute; top: 299px; width: 100%;">
                                            <div class="row">
                                                <div class="col-auto item-restaurant-img"><button class="inline"><img
                                                            src="https://images.foody.vn/res/g27/269188/s120x120/630bfef0-48d1-4fe5-9c09-cfb62d3dd526.jpeg"
                                                            alt="Cafe Đen xay nguyên chất" width="60"
                                                            height="60"></button></div>
                                                <div class="col item-restaurant-info">
                                                    <h2 class="item-restaurant-name">Cafe Đen xay nguyên chất</h2>
                                                </div>
                                                <div class="col-auto item-restaurant-more">
                                                    <div class="row ">
                                                        <div class="col-auto product-price">
                                                            <div class="old-price">20,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                            <div class="current-price">10,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto adding-food-cart txt-right">
                                                            <div class="btn-adding">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-restaurant-row"
                                            style="height: 81px; left: 0px; position: absolute; top: 380px; width: 100%;">
                                            <div class="row">
                                                <div class="col-auto item-restaurant-img"><button class="inline"><img
                                                            src="https://images.foody.vn/res/g27/269188/s120x120/569af9f7-0c8d-47cd-a3d7-803f4d27-d02992ab-201014092100.jpeg"
                                                            alt="Nâu phin truyền thống" width="60" height="60"></button>
                                                </div>
                                                <div class="col item-restaurant-info">
                                                    <h2 class="item-restaurant-name">Nâu phin truyền thống</h2>
                                                </div>
                                                <div class="col-auto item-restaurant-more">
                                                    <div class="row ">
                                                        <div class="col-auto product-price">
                                                            <div class="old-price">20,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                            <div class="current-price">10,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto adding-food-cart txt-right">
                                                            <div class="btn-adding">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-group" id="section-group-menu-1228514"
                                            style="height: 56px; left: 0px; position: absolute; top: 461px; width: 100%;">
                                            <div class="title-menu">Cà phê</div>
                                        </div>
                                        <div class="item-restaurant-row"
                                            style="height: 81px; left: 0px; position: absolute; top: 517px; width: 100%;">
                                            <div class="row">
                                                <div class="col-auto item-restaurant-img"><button class="inline"><img
                                                            src="https://images.foody.vn/res/g27/269188/s120x120/7d8331f7-96fb-4376-be0b-75ef75e2-022b0ed4-201014091131.jpeg"
                                                            alt="Nâu lắc" width="60" height="60"></button></div>
                                                <div class="col item-restaurant-info">
                                                    <h2 class="item-restaurant-name">Nâu lắc</h2>
                                                </div>
                                                <div class="col-auto item-restaurant-more">
                                                    <div class="row ">
                                                        <div class="col-auto product-price">
                                                            <div class="old-price">15,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                            <div class="current-price">10,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto adding-food-cart txt-right">
                                                            <div class="btn-adding">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-restaurant-row"
                                            style="height: 81px; left: 0px; position: absolute; top: 598px; width: 100%;">
                                            <div class="row">
                                                <div class="col-auto item-restaurant-img"><button class="inline"><img
                                                            src="https://images.foody.vn/res/g27/269188/s120x120/b19d2a32-4103-4bd5-9f1b-5896720b90b6.jpeg"
                                                            alt="Cafe Nâu xay nguyên chất" width="60"
                                                            height="60"></button></div>
                                                <div class="col item-restaurant-info">
                                                    <h2 class="item-restaurant-name">Cafe Nâu xay nguyên chất</h2>
                                                </div>
                                                <div class="col-auto item-restaurant-more">
                                                    <div class="row ">
                                                        <div class="col-auto product-price">
                                                            <div class="old-price">20,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                            <div class="current-price">10,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto adding-food-cart txt-right">
                                                            <div class="btn-adding">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-restaurant-row"
                                            style="height: 81px; left: 0px; position: absolute; top: 679px; width: 100%;">
                                            <div class="row">
                                                <div class="col-auto item-restaurant-img"><button class="inline"><img
                                                            src="https://images.foody.vn/res/g27/269188/s120x120/bc914ac9-919f-44bd-8ea6-1e57af7c-e1473a8f-201014091014.jpeg"
                                                            alt="Bạc xỉu" width="60" height="60"></button></div>
                                                <div class="col item-restaurant-info">
                                                    <h2 class="item-restaurant-name">Bạc xỉu</h2>
                                                </div>
                                                <div class="col-auto item-restaurant-more">
                                                    <div class="row ">
                                                        <div class="col-auto product-price">
                                                            <div class="current-price">20,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto adding-food-cart txt-right">
                                                            <div class="btn-adding">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-restaurant-row"
                                            style="height: 81px; left: 0px; position: absolute; top: 760px; width: 100%;">
                                            <div class="row">
                                                <div class="col-auto item-restaurant-img"><button class="inline"><img
                                                            src="https://images.foody.vn/res/g27/269188/s120x120/2b41f95d-95bd-4409-a85e-75b7d5d0-53ac5964-201014091619.jpeg"
                                                            alt="Đen phin truyền thống" width="60" height="60"></button>
                                                </div>
                                                <div class="col item-restaurant-info">
                                                    <h2 class="item-restaurant-name">Đen phin truyền thống</h2>
                                                </div>
                                                <div class="col-auto item-restaurant-more">
                                                    <div class="row ">
                                                        <div class="col-auto product-price">
                                                            <div class="old-price">20,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                            <div class="current-price">10,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto adding-food-cart txt-right">
                                                            <div class="btn-adding">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-restaurant-row"
                                            style="height: 81px; left: 0px; position: absolute; top: 841px; width: 100%;">
                                            <div class="row">
                                                <div class="col-auto item-restaurant-img"><button class="inline"><img
                                                            src="https://images.foody.vn/res/g27/269188/s120x120/630bfef0-48d1-4fe5-9c09-cfb62d3dd526.jpeg"
                                                            alt="Cafe Đen xay nguyên chất" width="60"
                                                            height="60"></button></div>
                                                <div class="col item-restaurant-info">
                                                    <h2 class="item-restaurant-name">Cafe Đen xay nguyên chất</h2>
                                                </div>
                                                <div class="col-auto item-restaurant-more">
                                                    <div class="row ">
                                                        <div class="col-auto product-price">
                                                            <div class="old-price">20,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                            <div class="current-price">10,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto adding-food-cart txt-right">
                                                            <div class="btn-adding">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-restaurant-row"
                                            style="height: 81px; left: 0px; position: absolute; top: 922px; width: 100%;">
                                            <div class="row">
                                                <div class="col-auto item-restaurant-img"><button class="inline"><img
                                                            src="https://images.foody.vn/res/g27/269188/s120x120/569af9f7-0c8d-47cd-a3d7-803f4d27-d02992ab-201014092100.jpeg"
                                                            alt="Nâu phin truyền thống" width="60" height="60"></button>
                                                </div>
                                                <div class="col item-restaurant-info">
                                                    <h2 class="item-restaurant-name">Nâu phin truyền thống</h2>
                                                </div>
                                                <div class="col-auto item-restaurant-more">
                                                    <div class="row ">
                                                        <div class="col-auto product-price">
                                                            <div class="old-price">20,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                            <div class="current-price">10,000<span
                                                                    style="font-weight: 400;position: relative;top: -9px;font-size: 10px;right: 0;">đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto adding-food-cart txt-right">
                                                            <div class="btn-adding">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-group" id="section-group-menu-1228515"
                                            style="height: 56px; left: 0px; position: absolute; top: 1003px; width: 100%;">
                                            <div class="title-menu">Sinh tố hoa quả</div>
>>>>>>> d8834365ab862e63a09f9124326203b7ef540dc0
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
                <div class="modal fade modal-topping" id="modal-topping" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="row align-items-center">
                                    <div class="col-auto topping-dish-image"><img src=""></div>
                                    <div class="col topping-summary">
                                        <div class="topping-dish-name"></div>
                                        <div class="topping-dish-price">Giá: </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="topping-category"></div>
                            </div>
                            <div class="modal-footer">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="topping-add-sub">
                                            <div class="btn-sub">-</div><input type="text" disabled="" value="1">
                                            <div class="btn-adding">+</div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><button type="button" class="btn btn-over"><span>Hết
                                                hàng</span></button></div>
                                </div>
=======
            </div>
            <div class="modal fade modal-topping" id="modal-topping" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row align-items-center">
                                <div class="col-auto topping-dish-image"><img src=""></div>
                                <div class="col topping-summary">
                                    <div class="topping-dish-name"></div>
                                    <div class="topping-dish-price">Giá: </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="topping-category"></div>
                        </div>
                        <div class="modal-footer">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="topping-add-sub">
                                        <div class="btn-sub">-</div><input type="text" disabled="" value="1">
                                        <div class="btn-adding">+</div>
                                    </div>
                                </div>
                                <div class="col-auto"><button type="button" class="btn btn-over"><span>Hết
                                            hàng</span></button></div>
>>>>>>> d8834365ab862e63a09f9124326203b7ef540dc0
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
                <!-- <div class="modal fade modal-alert" id="modal-delivery-alert-MenuAlertModal" tabindex="-1" role="dialog"
=======
            </div>
            <!-- <div class="modal fade modal-alert" id="modal-delivery-alert-MenuAlertModal" tabindex="-1" role="dialog"
>>>>>>> d8834365ab862e63a09f9124326203b7ef540dc0
                    aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-noti" role="document">
                        <div class="modal-content"><span class="close" data-dismiss="modal">x</span>
                            <div class="modal-header txt-bold font13"><span class="txt-red">Now</span> Thông báo</div>
                            <div class="modal-body">
                                <div class="col col-10">
                                    <p class="font15"><span></span></p>
                                </div>
                            </div>
                            <div class="modal-footer content-right"><button type="button" class="btn btn-red"
                                    data-dismiss="modal">Ok</button></div>
                        </div>
                    </div>
                </div>
                <div class="modal fade modal-box-image" id="modal-box-image" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="res-menu-carousel"></div>
                    </div>
                </div>
                <div class="modal fade modal-alert" id="modal-delivery-confirm-MenuConfirmModal" tabindex="-1"
                    role="dialog" aria-hidden="true" data-keyboard="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content"><span class="close" data-dismiss="modal">x</span>
                            <div class="modal-header txt-bold font13"><span class="txt-red">Now</span> Thông báo</div>
                            <div class="modal-body">
                                <p class="font15 max-width-750"></p>
                            </div>
                            <div class="modal-footer content-right"><button type="button" class="btn btn-gray"
                                    data-dismiss="modal">Hủy</button><button type="button" class="btn btn-red"
                                    data-dismiss="modal">Ok</button></div>
                        </div>
                    </div>
                </div> -->
<<<<<<< HEAD
            </div>

            <!-- <div class="row">
=======
        </div>

        <!-- <div class="row">
>>>>>>> d8834365ab862e63a09f9124326203b7ef540dc0
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
                        <div class="small-gutter col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="bt-content__item">
                                <div class="restaurant">
                                    <a href="#">
                                        <img class="restaurant__img" src="{{ url('Home/images/cha-ca.jpg') }}" alt="res">
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
                                        <li class="dish__location-item"><span>Chả cá Lã Vọng:</span> 14 phố Chả Cá và 107
                                            Nguyễn
                                            Trường Tộ</li>
                                        <li class="dish__location-item"><span>Cửa hàng chả cá Anh Vũ</span> : Số 120 K1
                                            Giảng Võ,
                                            Quận Ba Đình.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> -->
<<<<<<< HEAD
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
=======
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
>>>>>>> d8834365ab862e63a09f9124326203b7ef540dc0
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    @include('Layouts.footer')

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
    <script src="Home/js/home.js"></script>
    @endsection
=======
</div>
@include('Layouts.footer')

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
<script src="Home/js/home.js"></script>
@endsection
>>>>>>> d8834365ab862e63a09f9124326203b7ef540dc0
