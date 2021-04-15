@extends('Layouts.auth')

@section('title', 'Đăng ký')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel"><strong>Điều khoản dịch vụ</strong></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('Auth.terms')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary " data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Form -->
    <section class="ftco-section fade-in">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Tạo tài khoản mới</h2>
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
                        <form action="{{ url('/register') }}" id="register_form" class="signin-form" method="POST" novalidate>
                            @csrf
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" name="name" placeholder="Tên" value="{{ old('name') }}" required>
                            </div>
                            @if ($errors->has('name'))
                            <div class="row justify-content-center mb-4">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            @endif
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
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="confirm-password-field" name="confirm_password" placeholder="Xác nhận mật khẩu" required>
                                <span toggle="#confirm-password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            @if ($errors->has('confirm_password'))
                            <div class="row justify-content-center mb-4">
                                <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                            </div>
                            @endif
                            <div class="form-group mb-0 d-flex flex-column">
                                <div class="d-flex justify-content-center">
                                    <label class="checkbox-wrap checkbox-primary">
                                        <input type="checkbox" name="terms">Tôi đồng ý với các 
                                        <a href="#" class="text-decoration-none" 
                                            data-toggle="modal" data-target="#exampleModal">
                                            điều khoản dịch vụ
                                        </a>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('terms'))
                            <div class="row justify-content-center mb-4">
                                <span class="text-danger">{{ $errors->first('terms') }}</span>
                            </div>
                            @endif
                            <div class="form-group mt-3">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="mt-4 text-center">
                    <a href="{{ url('/login') }}" style="font-size: 2rem">Đã có tài khoản? Đăng nhập tại đây</a>
                </div>
            </div>
        </div>
    </section>
@endsection

    