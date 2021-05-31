<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class HomeController extends Controller
{


    function index()
    {
        return view('Home/home');
    }
    function handleOutstandingFood($outstandingDishes)
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

    function getMoreOutstandingFood(Request $request)
    {
        $outstandingDishes = DB::table('dishes_restaurants')
        ->join('outstanding_dishes', 'dishes_restaurants.dishes_id', '=', 'outstanding_dishes.id')
        ->join('restaurants', 'dishes_restaurants.restaurants_id', '=', 'restaurants.id')
        ->where('isOutstandingDish', '=', true)
        ->select('restaurants.id', 'linkTo','href', 'outstanding_dishes.name', DB::raw('concat(restaurants.name,": ",restaurants.location) as location'), 'description', 'outstanding_dishes.image')
        ->get();
        // dd($outstandingDishes);
        $outstandingDishesList = $this->handleOutstandingFood($outstandingDishes);
        return response()->json($outstandingDishesList);
    }

    function getMoreRestaurants(Request $request){
        // request.itemLength
        
        $restaurants = DB::table('restaurants')
        ->where('id','<=',$request->itemEnd)
        ->where('id','>=',$request->itemStart)
        ->get();
        return response()->json($restaurants);
    }
}
