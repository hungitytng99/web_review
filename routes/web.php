<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Review\ReviewController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Review\CommentController;
use App\Http\Controllers\Search\SearchResultController;

Route::redirect('/home', '/');
Route::namespace('home')->group(function () {
    //Home index
    Route::get('/', [HomeController::class, 'index']);
    //Ajax request
    Route::post('/get-more-outstanding-dishes', [HomeController::class, 'getMoreOutstandingFood']);
    Route::post('/get-more-restaurants', [HomeController::class, 'getMoreRestaurants']);
    Route::get('/get-infinity-restaurants', [HomeController::class, 'getInfinityRestaurants']);
    Route::get('/get-auth-status', [HomeController::class, 'getAuthStatus']);
});
Route::namespace('Search')->group(function () {
    Route::get('/search/{params}', [SearchResultController::class, 'index']);
});


Route::get('/about', [AboutController::class, 'about']);
Route::post('/about', [AboutController::class, 'processContactForm']);


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
//Review
    // Route::get('/review', [CommentController::class, 'viewcomment'])->name('viewcomment');
Route::get('{Id}', [ReviewController::class, 'getId']);
Route::post('/{Id}', [CommentController::class, 'Comment']);
// Route::post('/review2dd', [CommentController::class, 'Comment']);

// Route::get('/review', 'CommentController@index');

// Route::get('/review', 'CommentController@create');

// Route::post('/review', 'Controller@storeComment');