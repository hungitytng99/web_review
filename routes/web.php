<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    // dd(DB::table('test')->get());
    // https://media.foody.vn/images/beauty-upload-api-675x355-%282%29-210412170953.jpg
    return view('Home/homepage');
})->name('home');

Route::redirect('/home', '/');

// Login, register and logout
Route::namespace('auth')->group(function () {
    // Login
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'processLogin'])->name('process_login');
    // Register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'processRegister'])->name('process_register');
    // Forgot Password
    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot_password');
    Route::post('/forgot-password', [AuthController::class, 'processForgotPassword'])->name('password.reset');
});

Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});