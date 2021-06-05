<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
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

    public function getUserReviews($id) {
        $user_reviews = DB::table('reviews')->where('user_id', $id)->get();
        $user = DB::table('users')->where('id', $id)->get()->first();
        
        $code = Crypt::encrypt($id);
        dump($code);
        try {
            dump(Crypt::decrypt($code));
        } catch (DecryptException $e) {
            
        }

        if ($user_reviews->isEmpty()) {
            abort(404);
        }

        $reviews = [];
        $restaurants = [];

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

            if (!in_array($data['restaurant']->name, $restaurants)) {
                $restaurants[$data['restaurant']->id] = $data['restaurant']->name;
            }
        }

        return view('Review.user-review')->with([
            'user' => $user,
            'reviews' => $reviews,
            'restaurants' => $restaurants
        ]);

    }

    public function getUserReviewsByRestaurantId(Request $request) {
        $user_id = $request->user_id;
        $res_id = $request->res_id;

        $user_reviews;
        if ($res_id == 'all') {
            $user_reviews = DB::table('reviews')->where(['user_id' => $user_id])->get();
        } else {
            $user_reviews = DB::table('reviews')->where(['user_id' => $user_id, 'restaurant_id' => $res_id])->get();
        }
        
        $user = DB::table('users')->where('id', $user_id)->get()->first();

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

        $response = [
            'status' => 'success',
            'data' => $reviews
        ];

        return response()->json($response);

    }
}