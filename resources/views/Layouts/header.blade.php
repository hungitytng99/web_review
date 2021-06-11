<!-- Header -->
<link rel="stylesheet" href="/Homepage/css/header.css">
<div class="header__sticky">
    <div class="container-fluid">
        <div class="header">
            <!-- For mobile -->
            <input id="mobile-nav-check" type="checkbox" hidden />
            <label for="mobile-nav-check">
                <i class="mobile__nav-category fas fa-bars"></i>
            </label>
            <div class="nav__modal">
                <label for="mobile-nav-check" class="nav__modal-overlay"></label>
                <div class="nav__modal-body">
                    <div class="mobile__nav">
                        <div class="mobile__nav-text">MENU</div>
                        <ul class="mobile__nav-list">
                            <li class="mobile__nav-item --active">
                                <a href="/">Trang chủ </a>
                            </li>
                            <li class="mobile__nav-item">
                                <a href="/about-us">Giới thiệu </a>
                            </li>
                            <li class="mobile__nav-item">
                                <a href="/profile">Thông tin cá nhân</a>
                            </li>
                            <li class="mobile__nav-item">
                                <a href="/suggestion">Gợi ý thực đơn</a>
                            </li>
                            <li class="header__mobile-search">
                                <input id="mobile-search-input" type="text" class="header__mobile-search-input" onkeyup="handlePressEnter(event)" placeholder="Tìm món ăn, nhà hàng..."></input>
                                <i class="header__mobile-search-icon fas fa-search-location" onclick="submitSearchForm(this)"></i>
                            </li>
                            <li class="mobile__nav-item">
                                @if (Auth::check())
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();Cookies.remove('isShowNotify');">Đăng
                                    xuất</a>
                                <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" hidden>@csrf
                                </form>
                                @else
                                <a href="/login">Đăng nhập</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- For table and desktop -->
            <div class="header__nav hide-on-768">
                <ul class="header__nav-list --left ">
                    <li id="home-link" class="header__nav-item">
                        <a href="/">
                            Trang chủ
                        </a>
                    </li>
                    <li id="about-link" class="header__nav-item">
                        <a href="/about-us">
                            Giới thiệu
                        </a>
                    </li>
                    <!-- <li class="header__nav-item">
                        <a href="#">
                            Thực đơn
                        </a>
                    </li> -->
                </ul>
            </div>
            <a href="/" class="header__logo">
                foodee
            </a>
            <div class="header__nav --mobile">
                <ul class="header__nav-list --right ">
                    <li class="header__nav-item">
                        <div class="header__nav-search" tabindex="0">
                            <input type="text" class="header__nav-search-input" placeholder="Tìm món ăn, nhà hàng..." onkeyup="searchParams(event,this)" onblur="hideSearchPanel(this,event)" onfocus="searchParams(event,this)" ">
                            <i class=" header__nav-search-icon fas fa-search"></i>
                            <div id="header-search-result" onmousedown="preventHideDropdown(event)">
                                <a href="#" class="header__search-result-all">
                                    Xem tất cả kết quả cho "<span id="search-key"></span>"
                                </a>

                                <div id="loading-search-more"></div>
                                <div id="search-result"></div>
                            </div>
                        </div>
                    </li>
                    <li class="header__nav-item hide-on-768">
                        @if(Auth::check())
                        @php
                        $user = Auth::user();
                        @endphp
                        <div class="account noselect">
                            <div tabindex="1" class="account__user" onclick="showAccountDropdown(event)" onBlur="showAccountDropdown(event)">
                                <img src="<?php echo $user->avatar ?>" alt="account-avatar" class="account__user-img">
                                <div class="account__user-name"><?php echo $user->name ?></div>
                            </div>
                            <div id="header__dropdown-triangle-up"></div>
                            <div id="account__dropdown" onmousedown="preventHideDropdown(event)">
                                <ul class="account__dropdown-list">
                                    <li class="account__dropdown-item">
                                        <a href="/profile">Thông tin cá nhân</a>
                                    </li>
                                    <li class="account__dropdown-item">
                                        <a href="/suggestion">Gợi ý thực đơn</a>
                                    </li>
                                    <li class="account__dropdown-item">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();Cookies.remove('isShowNotify');">
                                            <div>Đăng xuất</div> <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>@csrf</form>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        @else
                        <a href="/login" class="header__nav-item-login">Đăng nhập</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<script src="/Homepage/js/header.js"></script>