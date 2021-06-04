<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use App\Models\Review;

class ReviewController extends Controller
{
    public function getId($Id)
    {
        $restaurants = DB::table('restaurants')
        ->where('linkTo', "=", $Id)
        ->get();
        $disheds= DB:: table('restaurants')
        ->join('dishes_restaurants', 'restaurants.id', '=', 'dishes_restaurants.restaurants_id')
        ->join('dishes', 'dishes.id', '=', 'dishes_restaurants.dishes_id')
        ->where('linkTo', "=", $Id)
        ->where('isOutstandingDish', '=', false)
        ->get();
        $min=100000;
        $max=0;
        foreach ($disheds as $dished) {
            if (
                $dished->price<= $min
            ) {
                $min=$dished->price;
            }
        }
        foreach ($disheds as $dished) {
            if (
                $dished->price >= $max
            ) {
                $max=$dished->price;
            }
        }
        $reviews = DB::table('reviews')
        ->join('users', 'reviews.user_id', '=', 'users.id')
        ->join('dishes', 'reviews.dish_id', '=', 'dishes.id')
        ->join('restaurants', 'reviews.restaurant_id', '=', 'restaurants.id')
        ->select('restaurants.name as restaurant_name', 'restaurants.image as restaurants_image', 'user_id', 'comment', 'reviews.images as reviews_image', 'reviews.rate as reviews_rate', 'dishes.name as dishes_name', 'email', 'avatar', 'dishes.image as dishes_image')

        ->where('restaurant_id', '=', $restaurants[0]->id)

        ->get();
        
        $user = DB::table('users')->where('id', '=', $reviews[0]->user_id)->get()->first();
        $review_image = [];
        $review_image = $reviews[0]->reviews_image;
        $review_image=json_decode($review_image);
        // dd($disheds);
        return view('Review/review')
        ->with('review_image', $review_image)
        ->with('Id', $Id)
        ->with('min', $min)
        ->with('max', $max)
        ->with('reviews', $reviews)
        ->with('disheds', $disheds)
        ->with('user', $user)
        ->with('restaurantDetail', $restaurants);
    }
}