@extends('Layouts.auth')

@section('title', 'Đăng nhập')

@section('content')
    <section class="ftco-section fade-in">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Đăng nhập tài khoản của bạn</h2>
                </div>
            </div>

            <!-- Notification -->
            @if (session('status-error'))
            <div class="row justify-content-center mb-5">
                <span class="text-danger">{{ session('status-error') }}</span>
            </div>
            @endif
            @if (session('status-success'))
            <div class="row justify-content-center mb-5">
                <span class="text-success">{{ session('status-success') }}</span>
            </div>
            @endif
            
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="{{ url('/login') }}" id="login_form" class="signin-form" method="POST" novalidate>
                            @csrf
                            <div class="form-group mb-4">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                            </div>
                            @if ($errors->has('email'))
                            <div class="row justify-content-center mb-4">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            @endif
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="password-field" name="password" placeholder="Mật khẩu" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            @if ($errors->has('password'))
                            <div class="row justify-content-center mb-4">
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            </div>
                            @endif
                            <div class="form-group mt-5">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Đăng nhập</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">
                                        Nhớ tài khoản
                                        <input type="checkbox" name="remember_me">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="{{ route('forgot_password') }}">Quên mật khẩu</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Hoặc đăng nhập với &mdash;</p>
                        <div class="social d-flex text-center mb-3">
                            <a href="#" class="px-2 py-2 mr-md-2 rounded"><span class="iconify mr-2 align-text-bottom" data-icon="logos:facebook" data-inline="false"></span></span> Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-2 rounded"><span class="iconify mr-2 align-text-bottom" data-icon="logos:google-icon" data-inline="false"></span> Google</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="mt-4 text-center">
                    <a href="{{ url('/register') }}" style="font-size: 2rem">Chưa có tài khoản tại Foodee? Đăng ký ngay</a>
                </div>
            </div>
        </div>
    </section>
@endsection