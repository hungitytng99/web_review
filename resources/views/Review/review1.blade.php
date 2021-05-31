<!-- @extends('Layouts.page') -->

<!-- @section('title', 'Foodee - Trang chủ') -->

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
                        <h2 class="to-animate">Test <span> với</span> <a href="#" target="_blank">Foodee.co</a></h2>
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

    <!-- Carousel -->


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
            <div id="block_container">
                <div id="block1" class="row">
                    <meta itemprop="url"
                        content="https://www.goodfood.com.au/content/dam/images/h/1/t/y/7/x/image.related.articleLeadNarrow.300x0.h1vxl2.png/1621899708239.jpg" />
                    <meta itemprop="height" content="0" />
                    <meta itemprop="width" content="300" />
                    </figure>
                    <p>Every venue in the Guide will have been subject to a critique by our independent, anonymous
                        reviewers. As a team, they will review more than 800 restaurants in NSW and Victoria over the
                        next six months.</p>
                    <p>We're changing and evolving. So what exactly is different? Expect more restaurants across our
                        respective cities in areas we've previously left uncovered. Expect more cuisine styles and new,
                        diverse voices. Expect a shift in the way we have always done things. We want to showcase
                        restaurants that represent who we are as a dining population. We believe this shift is a strong
                        step in the right direction.</p>
                    <p>The Good Food Guide<em>, presented by Vittoria Coffee and Citi, will be out in November.</em></p>
                    <figure class="media  media--portrait-photo" data-event-tracking-enabled='false'
                        data-track-data='{"name_component":"Inline_Image"}' itemscope itemprop="image"
                        itemtype="http://schema.org/ImageObject">
                        <img alt="The Guide will include traditional fine dining establishments but it has broadened its scope."
                            title=""
                            src="https://www.goodfood.com.au/content/dam/images/h/1/w/0/q/h/image.related.articleLeadNarrow.300x0.h1vxl2.png/1621899708239.jpg">
                        <figcaption class="media__caption">
                            The Guide will include traditional fine dining establishments but it has broadened its
                            scope.&nbsp;<cite>Photo: Jennifer Soo</cite>
                        </figcaption>

                        <meta itemprop="url"
                            content="https://www.goodfood.com.au/content/dam/images/h/1/w/0/q/h/image.related.articleLeadNarrow.300x0.h1vxl2.png/1621899708239.jpg" />
                        <meta itemprop="height" content="0" />
                        <meta itemprop="width" content="300" />
                    </figure>
                    <h3>Scoring a hat (or even three!)</h3>
                    <p><strong>No hats</strong></p>
                    <p>If it's in <em>The Good Food Guide</em>, it's good. Though these restaurants have not been
                        awarded one, two or three hats, they are considered well worth a visit, providing an enjoyably
                        memorable experience.</p>
                    <p><strong>One hat</strong></p>
                    <p>To score a hat is the gold standard for Australian restaurants. Whether it's a neighbourhood
                        treasure, a brilliant pub, a tiny bar or huge dining palace, a one-hat restaurant consistently
                        delivers good food, good times and good value.</p>
                    <p><strong>Two hats</strong></p>
                    <p>Something special. It could be a specific cuisine, an original idea, a zeitgeist experience, a
                        perfect execution of traditional dining or the whole package, but it promises a benchmark
                        experience infused with the joy of dining.</p>
                    <p><strong>Three hats</strong></p>
                    <p>These are the top restaurants in Australia, and it's no surprise there are only a few of them. A
                        dining experience that consistently delivers great food, wine, hospitality, and the integrity of
                        doing their own thing to the best of their ability. A restaurant that goes the extra yards,
                        offering a celebratory experience that stays in your mind long after you leave.</p>
                    <h3><a id="scoring" name="scoring">Our points system explained</a></h3>
                    <p>We score every restaurant we review out of 20. Here's how.</p>
                    <p><strong>10 points for food</strong></p>
                    <p>Deliciousness, technique, produce, balance, presentation, consistency, style, innovation,
                        integrity.</p>
                    <p><em>*We're not comparing a fantastic biriyani with a 25-course degustation. This is all about
                            what is best in its particular class.</em></p>
                    <p><strong>5 points for hospitality</strong></p>
                    <p>Attitude, friendliness, efficiency, pacing, attentiveness, professional skills, knowledge, COVID
                        safety.</p>
                    <p><em>*Service need not be table service. It just needs to be the best version of the style of
                            service they offer, whether that's ordering at the bar or counter, yum cha trolley, touch
                            screen, QR code table delivery.</em></p>
                    <p><strong>3 points for experience</strong></p>
                    <p>Atmosphere, design, view, table spacing, noise levels, consistency, something extra (such as a
                        kitchen garden, kitchen counter dining).</p>
                    <p><em>*Did you leave feeling like you'd had an incredible time, or as if you'd simply had a meal?
                        </em></p>
                    <p><strong>2 points for value</strong></p>
                    <p>Is it worth it?</p>
                    <p><em>*Does it represent sound value either for money or experience? Would you recommend it?</em>
                    </p>
                    <h3>Introducing Michael Harry, Editor, <em>The Age Good Food Guide 2022 </em></h3>
                    <p>We're pleased to announce Michael Harry as <em>The Age Good Food Guide</em> 2022 Editor. Michael
                        has worked with <em>The Age</em> since 2015 across <em>Good Weekend</em>, <em>Executive
                            Style</em> and Good Food, and has been reviewing for <em>The Age Good Food Guide</em> since
                        2013.</p>
                    <p>"I'm beyond excited to be in the hot seat for the 2022 Guide as we tackle a whole new world of
                        dining, from tiny apartment restaurants to much-anticipated blockbusters. I can't wait to share
                        the best of the state on a plate."</p>
                    <p>Michael has hit the ground running, with the onerous task of eating his way around Victoria.</p>
                    <div class="adWrapper ">

                        <!-- <div>test</div> -->
                        <div class="small-gutter col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="bt-content__item">
                                <div class="restaurant">
                                    <a href="#">
                                        <img class="restaurant__img" src="{{ url('Home/images/cha-ca.jpg') }}"
                                            alt="res">
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
                                        <li class="dish__location-item"><span>Chả cá Lã Vọng:</span> 14 phố Chả Cá và
                                            107
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
                    <div id="block2">
                        test2
                        <!-- @php
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
        @include('ReviewBanner.carousel',$carouselLists) -->
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
                        <div class="small-gutter col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
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
                                    <div class="small-gutter col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
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