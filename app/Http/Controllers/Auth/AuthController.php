<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function login() {
        return view('Auth.login');
    }

    public function processLogin(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Điền đầy đủ email',
            'email.email' => 'Điền đúng địa chỉ email',
            'password.required' => 'Điền đầy đủ password'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();       
        }

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember_me = $request->has('remember_me');

        if (Auth::attempt($credential)) {
            $user = User::where(['email' => $credential['email']])->first();
            Auth::login($user, $remember_me);

            // if (Auth::user()->role == 'admin') {
            //     return redirect('/admin');
            // }
            return redirect('/');
        } else {
            return redirect()->back()->withInput()->with('status', 'Sai email hoặc mật khẩu');
        }
    }

    public function register() {
        return view('Auth.register');
    }

    public function processRegister(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
            'confirm_password' => 'required|same:password',
            'terms' => 'required'
        ], [
            'name.required' => 'Điền đầy đủ tên của bạn',
            'email.required' => 'Điền đầy đủ email của bạn',
            'email.email' => 'Điền đúng địa chỉ email',
            'password.required' => 'Điền đầy đủ password',
            'password.min' => 'Password quá ngắn',
            'password.max' => 'Password quá dài',
            'password.required' => 'Điền đầy đủ password',
            'confirm_password.required' => 'Điền lại đầy đủ password',
            'confirm_password.same' => 'Password không trùng nhau',
            'terms.required' => 'Chưa đồng ý các điều khoản dịch vụ'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();       
        }

        if (User::where(['email' => $request->email])->first()) {
            return redirect()->back()->withInput()->with('status', 'Tài khoản đã tồn tại');
        }

        $user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect('/login')->withInput()->with('status', 'Đăng ký tài khoản thành công!');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function forgotPassword() {
        return view('Auth.forgot-password');
    }

    public function processForgotPassword(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ], [
            'email.required' => 'Điền đầy đủ email',
            'email.email' => 'Điền đúng địa chỉ email',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();       
        }

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
    }
}
