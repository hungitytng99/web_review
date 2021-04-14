<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('Auth/css/app.css') }}">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

</head>
<body class="img js-fullheight" style="background-image: url('{{ asset('Auth/assets/bg.jpg') }}');">
    @yield('content')
    
    <script src="{{ asset('Auth/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Auth/js/popper.js') }}"></script>
    <script src="{{ asset('Auth/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Auth/js/main.js') }}"></script>
</body>
</html>