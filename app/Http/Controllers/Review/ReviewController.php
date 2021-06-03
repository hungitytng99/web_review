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
        dd($restaurants);
        return view('Review/review')
        ->with('Id', $Id)
        ->with('min', $min)
        ->with('max', $max)
        ->with('disheds', $disheds)
        ->with('restaurantDetail', $restaurants);
    }

    public function getUserReviews($id) {
        $user_reviews = DB::table('reviews')->where('user_id', $id)->get();
        $user = DB::table('users')->where('id', $id)->get()->first();

        // dump($user);

        if ($user_reviews->isEmpty()) {
            abort(404);
        }

        $reviews = [];

        foreach($user_reviews as $review) {
            $data = [
                'dish' => DB::table('dishes')->where('id', $review->dish_id)->get()->first(),
                'restaurant' => DB::table('restaurants')->where('id', $review->restaurant_id)->get()->first(),
                'comment' => $review->comment,
                'rate' => $review->rate,
                'images' => json_decode($review->images),
                'date' => $review->created_at,
            ];
            array_push($reviews, $data);
        }

        //dump($reviews);

        return view('Review.user-review')->with([
            'user' => $user,
            'reviews' => $reviews
        ]);

    }
}