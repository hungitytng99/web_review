@extends('Auth.layout.auth')

@section('title', 'Quên mật khẩu')

@section('content')
    <section class="ftco-section fade-in">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Lấy lại mật khẩu</h2>
                </div>
            </div>
            @if (session('status'))
            <div class="row justify-content-center mb-5">
                <span class="text-danger">{{ session('status') }}</span>
            </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="{{ route('password.reset') }}" id="forgot_password_form" class="signin-form" method="POST" novalidate>
                            @csrf
                            <div class="form-group mb-4">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <div class="row justify-content-center">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                @endif
                            </div>
                            <div class="form-group mt-5">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="mt-4 text-center">
                    <a href="{{ route('login') }}" style="font-size: 2rem">Quay lại trang đăng nhập</a>
                </div>
            </div>
        </div>
    </section>
@endsection