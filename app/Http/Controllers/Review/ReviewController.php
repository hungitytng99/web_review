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
        // $id = 'nom-ong-phuc-nghia-tan';
        // $result = DB::table('dishes_restaurants')
        // ->join('dishes', 'dishes_restaurants.dishes_id', '=', 'dishes.id')
        // ->join('restaurants', 'dishes_restaurants.restaurants_id', '=', 'restaurants.id')
        // ->where('isOutstandingDish', '=', false)
        // ->where('restaurants.id', '=', $id)
        // ->get();
        $restaurants = DB::table('restaurants')
        ->where('linkTo', "=", $Id)
        ->get();
        $disheds= DB:: table('restaurants')
        ->join('dishes_restaurants', 'restaurants.id', '=', 'dishes_restaurants.restaurants_id')
        ->join('dishes', 'dishes.id', '=', 'dishes_restaurants.dishes_id')
        ->where('linkTo', "=", $Id)
        ->where('isOutstandingDish', '=', false)
        ->get();
        // dd($disheds);
        // dd($restaurants);
        return view('Review/review')
        ->with('Id', $Id)
        ->with('disheds', $disheds)
        ->with('restaurantDetail', $restaurants);
    }
}