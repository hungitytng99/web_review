<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use App\Models\Review;
use App\Models\Comment;

class ReviewController extends Controller
{
    // public function Comment(Request $request)
    // {
    //     DB::insert('insert into reviews (user_id, restaurant_id,dish_id,comment,rate,images) values (?, ?,?, ?,?, ?)', [1,1,2, 'ngon',3,'/assets/avatars/default.png']);
    // }
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
        ->select('users.avatar as user_avatar', 'users.name as user_name', 'restaurants.name as restaurant_name', 'restaurants.image as restaurants_image', 'user_id', 'comment', 'reviews.images as reviews_image', 'reviews.rate as reviews_rate', 'dishes.name as dishes_name', 'email', 'avatar', 'dishes.image as dishes_image')

        ->where('restaurant_id', '=', $restaurants[0]->id)

        ->get();
        $user = DB::table('users')->where('id', '=', $reviews[0]->user_id)->get()->first();
        $review_image = [];
        $review_image = $reviews[0]->reviews_image;
        $review_image=json_decode($review_image);
        // dd($user);
        // dd($restaurants);
        // dd($disheds);
        // DB::table('reviews')->update(['user_id'=>1], ['restaurant_id'=>1], ['dish_id'=>2], ['comment'=>'ok'], ['rate'=>3], ['images'=>'/assets/avatars/default.png']);
        // DB::insert('insert into reviews (user_id, restaurant_id,dish_id,comment,rate,images) values (?, ?,?, ?,?, ?)', [1,1,2, 'Dayle',3,'/assets/avatars/default.png']);
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