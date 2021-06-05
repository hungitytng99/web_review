<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Review\ReviewController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Search\SearchResultController;
use App\Http\Controllers\Suggestion\SuggestionController;

Route::redirect('/home', '/');
Route::namespace('home')->group(function () {
    //Home index
    Route::get('/', [HomeController::class, 'index']);

    // About us
    Route::get('/about-us', [AboutController::class, 'about']);
    Route::post('/about-us', [AboutController::class, 'processContactForm']);

    //Ajax request
    Route::post('/api/get-more-outstanding-dishes', [HomeController::class, 'getMoreOutstandingFood']);
    Route::post('/api/get-more-restaurants', [HomeController::class, 'getMoreRestaurants']);
    Route::get('/api/get-infinity-restaurants', [HomeController::class, 'getInfinityRestaurants']);
    Route::get('/api/get-auth-status', [HomeController::class, 'getAuthStatus']);
    Route::get('/api/get-user-info', [HomeController::class, 'getContactUser']);

});

Route::namespace('Search')->group(function () {
    Route::get('/search/params={params}', [SearchResultController::class, 'index']);
    Route::get('/api/search', [SearchResultController::class, 'returnSearchInput']);
});

Route::get('/activities/{id}', [ReviewController::class, 'getUserReviews'])->where('id', '[0-9]+');
Route::post('/get-restaurant', [ReviewController::class, 'getUserReviewsByRestaurantId']);

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
    //get suggestion menu for user
    Route::get('/suggestion', [SuggestionController::class, 'index']);
    Route::get('/api/get-suggestion-detail', [SuggestionController::class, 'getSuggestionDetail']);
});

// Route::get('/review', [ReviewController::class, 'getId']);
//Review
Route::get('{Id}', [ReviewController::class, 'getId']);