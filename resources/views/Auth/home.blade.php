<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Welcome to home page</h1>
    @if (Auth::check())
        <h3>Hello {{ Auth::user()->name }}</h3>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>@csrf</form>
    @else
        <a href="{{ route('login') }}">Log in</a>
    @endif
</body>
</html>