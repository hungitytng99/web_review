@extends('Layouts.auth')

@section('title', 'Reset mật khẩu')

@section('content')
    <section class="ftco-section fade-in">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Thay đổi mật khẩu</h2>
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
                        <form action="{{ url('/reset-password') }}" id="forgot_password_form" class="signin-form" method="POST" novalidate>
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="hidden" name="email" value="{{ $email }}">
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" name="password" placeholder="Mật khẩu mới" required>
                            </div>
                            @if ($errors->has('password'))
                            <div class="row justify-content-center mb-4">
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            </div>
                            @endif
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" name="confirm_password" placeholder="Xác nhận mật khẩu mới" required>
                            </div>
                            @if ($errors->has('confirm_password'))
                            <div class="row justify-content-center mb-4">
                                <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                            </div>
                            @endif
                            <div class="form-group mt-5">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center">
                <div class="mt-4 text-center">
                    <a href="{{ url('/login') }}" style="font-size: 2rem">Quay lại trang đăng nhập</a>
                </div>
            </div> --}}
        </div>
    </section>
@endsection