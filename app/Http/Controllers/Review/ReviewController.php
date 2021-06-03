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
}