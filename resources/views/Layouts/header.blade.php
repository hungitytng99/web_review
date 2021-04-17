<!-- Header -->
<link rel="stylesheet" href="Home/css/header.css">
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
                                <a href="#">Trang chủ </a>
                            </li>
                            <li class="mobile__nav-item">
                                <a href="#">Giới thiệu </a>
                            </li>
                            <li class="mobile__nav-item">
                                <a href="#">Liên hệ</a>
                            </li>
                            <li class="mobile__nav-item">
                                @if (Auth::check())
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                        xuất</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>@csrf
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
                    <li class="header__nav-item --active">
                        <a href="#">
                            Trang chủ
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#">
                            Giới thiệu
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#">
                            Thực đơn
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__logo">
                foodee
            </div>
            <div class="header__nav --mobile">
                <ul class="header__nav-list --right ">
                    <li class="header__nav-item">
                        <div class="header__nav-search">
                            <input type="text" class="header__nav-search-input" placeholder="Tìm món ăn, nhà hàng...">
                            <i class="header__nav-search-icon fas fa-search"></i>
                        </div>
                    </li>
                    <li class="header__nav-item hide-on-768">
                        @if (Auth::check())
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                xuất</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>@csrf
                            </form>
                        @else
                            <a href="/login" class="header__nav-item-login">Đăng nhập</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<script src="Home/js/header.js"></script>
