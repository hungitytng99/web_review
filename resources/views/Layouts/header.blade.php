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
                                <a href="#">Giới thiệu </a>
                            </li>
                            <li class="mobile__nav-item">
                                <a href="#">Liên hệ</a>
                            </li>
                            <li class="mobile__nav-item">
                                @if (Auth::check())
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
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
                    <li class="header__nav-item --active">
                        <a href="/">
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
                                        <a href="/profile">Gợi ý thực đơn</a>
                                    </li>
                                    <li class="account__dropdown-item">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

<script>
    function showAccountDropdown(e) {
        if (e.type == "click") {
            $('#header__dropdown-triangle-up').toggleClass("show-element");
            $('#account__dropdown').toggleClass("show-element");
        } else {
            $('#header__dropdown-triangle-up').removeClass("show-element");
            $('#account__dropdown').removeClass("show-element");
        }
    }
    // js for focus header search nav 
    let headerSearch = $('input.header__nav-search-input');
    let headerSeacrhBorder = $('div.header__nav-search');
    headerSearch.focus(() => {

        headerSeacrhBorder.css('border', '1px solid var(--tertiary)');
    })
    headerSearch.blur(() => {
        headerSeacrhBorder.css('border', '1px solid #999');
    })
    //prevent scroll when open mobile nav
    let mobileNavHandle = $('#mobile-nav-check');
    mobileNavHandle.prop('checked', false);
    mobileNavHandle.change(() => {
        if (mobileNavHandle.prop('checked')) {
            $('body').css('overflow', 'hidden');
        } else {
            $('body').css('overflow', 'scroll');
        }
    })
</script>