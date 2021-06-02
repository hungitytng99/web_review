<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
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
                'dish' => DB::table('dishes')->where('id', $review->dish_id)->get()->first()->name,
                'restaurant' => DB::table('restaurants')->where('id', $review->restaurant_id)->get()->first()->name,
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
