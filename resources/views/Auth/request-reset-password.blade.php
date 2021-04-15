<h2>Xin chào {{ $user->name }}</h2>
<p>
    Nhấn vào <a href="{{ url('/reset-password/' . $token) }}">link</a> này để reset mật khẩu tài khoản của bạn
</p>