<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Review\ReviewController;

Route::get('/', function () {
    // dd(DB::table('test')->get());
    // https://media.foody.vn/images/beauty-upload-api-675x355-%282%29-210412170953.jpg
    return view('Home/home');
})->name('home');

Route::redirect('/home', '/');

Route::get('/about', [AboutController::class, 'about']);
Route::post('/about', [AboutController::class, 'processContactForm']);

Route::get('/review', [ReviewController::class, 'review']);

Route::namespace('auth')->group(function () {
    // Login
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'processLogin']);
    // Register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'processRegister'])->name('process_register');
    // Forgot Password
    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot_password');
    Route::post('/forgot-password', [AuthController::class, 'processForgotPassword']);
    // Reset password
    Route::get('/reset-password', function () {
        abort(404);
    });    
    Route::middleware('guest')->group(function () {
        Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword']);
        Route::post('/reset-password', [AuthController::class, 'processResetPassword']);
    });
});

Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    // Profile
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'editProfile'])->name('edit_profile');
    Route::delete('/profile', [ProfileController::class, 'deleteAccount']);
});
