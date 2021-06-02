<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Validator;
use App\Models\User;

use DB;
use Carbon\Carbon;
use Mail;

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
            'password.required' => 'Điền đầy đủ mật khẩu'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();       
        }

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember_me = $request->has('remember_me');

        $user = User::where(['email' => $credential['email']])->first();
        if ($user) {
            if (Auth::attempt($credential)) {
            
                Auth::login($user, $remember_me);
    
                // if (Auth::user()->role == 'admin') {
                //     return redirect('/admin');
                // }
                return redirect('/');
            } else {
                return redirect()->back()->withInput()->with('status-error', 'Sai email hoặc mật khẩu');
            }
        } else {
            return redirect()->back()->withInput()->with('status-error', 'Tài khoản không tồn tại');
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
            'password.required' => 'Điền đầy đủ mật khẩu',
            'password.min' => 'Mật khẩu quá ngắn',
            'password.max' => 'Mật khẩu quá dài',
            'confirm_password.required' => 'Điền lại đầy đủ mật khẩu',
            'confirm_password.same' => 'Mật khẩu không trùng nhau',
            'terms.required' => 'Chưa đồng ý các điều khoản dịch vụ'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();       
        }

        if (User::where(['email' => $request->email])->first()) {
            return redirect()->back()->withInput()->with('status-error', 'Tài khoản đã tồn tại');
        }

        $user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
            'avatar' => '/assets/avatars/default.png'
        ]);

        return redirect('/login')->withInput()->with('status-success', 'Đăng ký tài khoản thành công!');
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

        $user = User::where(['email' => $request->email])->first();
        if ($user == null) {
            return redirect()->back()->withInput()->with('status-error', 'Email không tồn tại');
        }

        //Create Password Reset Token
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => str_random(60),
            'created_at' => Carbon::now()
        ]);

        //Get the token just created above
        $tokenData = DB::table('password_resets')->where(['email' => $request->email])->first();
        
        if ($this->sendResetEmail($request->email, $tokenData->token)) {
            return redirect()->back()->with('status-success', "Đường link reset đã được gửi đến $user->email");
        }

        return redirect()->back()->withInput()->with('status-error', 'Lỗi mạng. Vui lòng thử lại');
    }

    public function resetPassword($token) {
        // Check if token is invalid
        $tokenData = DB::table('password_resets')->where('token', $token)->first();
        if ($tokenData == null) {
            abort(404);
        }

        return view('Auth.reset-password', [
            'token' => $tokenData->token, 'email' => $tokenData->email
        ]);
    }

    public function processResetPassword(Request $request) {
        //Validate input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|max:20',
            'confirm_password' => 'required|same:password',
            'token' => 'required'
        ], [
            'email.required' => 'Điền đầy đủ email của bạn',
            'email.email' => 'Điền đúng địa chỉ email',
            'email.exists' => 'Địa chỉ email không tồn tại',
            'password.required' => 'Điền đầy đủ mật khẩu',
            'password.min' => 'Mật khẩu quá ngắn',
            'password.max' => 'Mật khẩu quá dài',
            'confirm_password.required' => 'Điền lại đầy đủ mật khẩu',
            'confirm_password.same' => 'Mật khẩu không trùng nhau',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        // Validate the token
        $tokenData = DB::table('password_resets')->where('token', $request->token)->first();
        // Redirect the user back to the password reset request form if the token is invalid
        if (!$tokenData) {
            return redirect('/forgot-password');
        }
        $user = User::where('email', $tokenData->email)->first();
        // Redirect the user back if the email is invalid
        if (!$user) {
            return redirect()->back()->withErrors('email', 'Không tìm thấy email');
        }
        $user->password = bcrypt($request->password);
        $user->update(); //or $user->save();

        //login the user immediately they change password successfully
        //Auth::login($user);

        //Delete the token
        DB::table('password_resets')->where('email', $user->email)->delete();

        //Send Email Reset Success Email
        if ($this->sendSuccessEmail($tokenData->email)) {
            return redirect('/login')->withInput()->with('status-success', 'Reset mật khẩu thành công!');
        }

        return redirect()->back()->withInput()->with('status-error', 'Lỗi mạng. Vui lòng thử lại');
    }

    private function sendResetEmail($email, $token) {
        $user = User::where(['email' => $email])->first();

        //Generate, the password reset link. The token generated is embedded
        $link = config('base_url') . 'reset-password/' . $token . '?email=' . urlencode($user->email);

        try {
            Mail::send(
                'Auth.request-reset-password',
                ['user' => $user, 'token' => $token], 
                function ($message) use ($user) {
                $message->to($user->email);
                $message->subject('Xác nhận reset mật khẩu tài khoản trên Foodee, ' . $user->name);
            });
            
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    private function sendSuccessEmail($email) {
        $user = User::where(['email' => $email])->first();

        try {
            Mail::send(
                'Auth.success-reset-password',
                ['user' => $user], 
                function ($message) use ($user) {
                $message->to($user->email);
                $message->subject('Reset mật khẩu tài khoản trên Foodee thành công, ' . $user->name);
            });
            
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
