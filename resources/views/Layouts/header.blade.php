<!-- Header -->
<div class="js-sticky">
    <div class="main-nav">
        <div class="container-fluid">
            <div class="menu-1">
                <a class="active" href="#">Trang chủ</a>
                <a href="#">Giới thiệu</a>
                <a href="#">Thực đơn</a>
            </div>
            <div class="logo">
                <a href="#">Foodee</a>
            </div>
            <div class="menu-2">
                <a href="#">Ô tìm kiếm</a>
                
                <!-- Show login or logout button -->
                @if (Auth::check())
                    <a href="{{ route('logout') }}" style="text-decoration: underline"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng xuất</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>@csrf</form>
                @else
                    <a href="{{ url('/login') }}" class="header__login">Đăng nhập</a>
                @endif
            </div>

        </div>

    </div>
</div>