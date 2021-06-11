<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
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
    public function handleOutstandingFood($outstandingDishes)
    {
        $outstandingDishesList = [];
        $outstandingDishesTemp = [];
        $key = [];
        $osDishLength  = count($outstandingDishes);
        for ($i = 0; $i <  $osDishLength; $i++) {
            $key[$i] = 0;
        }
        for ($i = 0; $i <  $osDishLength; $i++) {
            if ($key[$i] === 0) {
                $outstandingDishesTemp = $outstandingDishes[$i];
                $locationStore = [];
                array_push($locationStore, $outstandingDishes[$i]->location);
                array_push($locationStore, $outstandingDishes[$i]->linkTo);
                $outstandingDishesTemp->location = [];
                array_push($outstandingDishesTemp->location, $locationStore);
                $key[$i] = 1;
                for ($j = $i + 1; $j < count($outstandingDishes); $j++) {
                    if ($outstandingDishes[$j]->href === $outstandingDishes[$i]->href) {
                        $locationStore = [];
                        array_push($locationStore, $outstandingDishes[$j]->location);
                        array_push($locationStore, $outstandingDishes[$j]->linkTo);
                        array_push($outstandingDishesTemp->location, $locationStore);
                        $key[$j] = 1;
                    }
                }
                array_push($outstandingDishesList, $outstandingDishesTemp);
                $outstandingDishesTemp = [];
            }
        }
        return $outstandingDishesList;
    }

    public function getMoreOutstandingFood(Request $request)
    {
        if (isset($request->href)) {
            $outstandingDishes = DB::table('dishes_restaurants')
                ->join('outstanding_dishes', 'dishes_restaurants.dishes_id', '=', 'outstanding_dishes.id')
                ->join('restaurants', 'dishes_restaurants.restaurants_id', '=', 'restaurants.id')
                ->where('isOutstandingDish', '=', true)
                ->where('outstanding_dishes.href', '=', $request->href)
                ->select('restaurants.id', 'linkTo', 'href', 'outstanding_dishes.name', DB::raw('concat(restaurants.name,": ",restaurants.location) as location'), 'description', 'outstanding_dishes.image')
                ->get();
        } else {
            $outstandingDishes = DB::table('dishes_restaurants')
                ->join('outstanding_dishes', 'dishes_restaurants.dishes_id', '=', 'outstanding_dishes.id')
                ->join('restaurants', 'dishes_restaurants.restaurants_id', '=', 'restaurants.id')
                ->where('isOutstandingDish', '=', true)
                ->select('restaurants.id', 'linkTo', 'href', 'outstanding_dishes.name', DB::raw('concat(restaurants.name,": ",restaurants.location) as location'), 'description', 'outstanding_dishes.image')
                ->get();
        }
        // dd($outstandingDishes);
        $outstandingDishesList = $this->handleOutstandingFood($outstandingDishes);
        // return response()->json([
        //     'message' => 'Page Not Found. If error persists, contact info@website.com'
        // ], 404);
        return response()->json($outstandingDishesList);
    }


    public function getUserReviews($id)
    {
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

        foreach ($user_reviews as $review) {
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

    public function getUserReviewsByRestaurantId(Request $request)
    {
        $user_id = $request->user_id;
        $res_id = $request->res_id;

        $user_reviews=[];
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

        foreach ($user_reviews as $review) {
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