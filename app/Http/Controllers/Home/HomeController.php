<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\IssetPass;

use function PHPUnit\Framework\isEmpty;

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
        return response()->json($outstandingDishesList);
    }

    function getMoreRestaurants(Request $request)
    {
        $request->itemEnd = 12;
        $request->itemStart = 1;
        $restaurants = DB::table('restaurants')
            ->where('id', '<=', $request->itemEnd)
            ->where('id', '>=', $request->itemStart)
            ->get();
        $restaurants = $this->attachSavedRestaurantField($restaurants);
        return response()->json($restaurants);
    }
    function getNRandomNumber($n, $end, $arrayExcept = [], $start = 1)
    {
        $restaurantsList = range($start, $end);
        if (count($arrayExcept) > 0) {
            $restaurantsList = array_diff($restaurantsList, $arrayExcept);
        }
        shuffle($restaurantsList);
        $result = array_slice($restaurantsList, count($restaurantsList) - $n);
        return $result;
    }
    function getInfinityRestaurants(Request $request)
    {
        $restaurants = DB::table('restaurants')
            ->get();

        $totalRestaurant = count($restaurants);
        $restaurantsIdList = $this->getNRandomNumber($request->itemLength, $totalRestaurant);
        // return list of random record
        $restaurantsList = [];
        foreach ($restaurantsIdList as $restaurantsId) {

            $restaurantsItem = $restaurants = DB::table('restaurants')
                ->where('id', '=', $restaurantsId)
                ->get();
            array_push($restaurantsList, $restaurantsItem[0]);
        }
        $restaurantsList = $this->attachSavedRestaurantField($restaurantsList);
        return response()->json($restaurantsList);
    }

    function getAuthStatus(Request $request)
    {
        return response()->json(Auth::check());
    }

    function getContactUser(Request $request)
    {
        return response()->json($this->checkEmptyInfo());
    }

    function checkEmptyInfo()
    {
        if (isset(Auth::user()->job) && isset(Auth::user()->date_of_birth) && isset(Auth::user()->weight) && isset(Auth::user()->height)) {
            return true;
        }
        return false;
    }
    function getSavedRestaurants(Request $request)
    {
        $result = [];
        $restaurantsList = DB::table('users_save_restaurants')
            ->where('user_id', '=', Auth::user()->id)
            ->select('restaurant_id')
            ->get();
        foreach ($restaurantsList as $restaurantId) {
            $restaurant = DB::table('restaurants')
                ->where('id', '=', $restaurantId->restaurant_id)
                ->get();
            array_push($result, $restaurant[0]);
        }
        return response()->json($result);
    }
    function checkSavedRestaurants($restaurantId)
    {
        $restaurantsList = DB::table('users_save_restaurants')
            ->where('restaurant_id', '=', $restaurantId)
            ->where('user_id', '=', Auth::user()->id)
            ->get();
        return !$restaurantsList->isEmpty();
    }
    function attachSavedRestaurantField($restaurantList)
    {
        $result = [];

        foreach ($restaurantList as $restaurant) {
            if (Auth::check()) {
                if ($this->checkSavedRestaurants($restaurant->id)) {
                    $restaurant->isSaved = 1;
                }
            }
            array_push($result, $restaurant);
        }
        return $result;
    }

    function savedRestaurants(Request $request)
    {
        try {

            DB::table('users_save_restaurants')->insert([
                ['user_id' => Auth::user()->id, 'restaurant_id' => $request->restaurantId]
            ]);
            return response()->json(1);
        } catch (Exception $e) {
            return response()->json(0);
        }
    }

    function deleteSavedRestaurants(Request $request)
    {
        try {
            DB::table('users_save_restaurants')
                ->where('restaurant_id', '=', $request->restaurantId)
                ->delete();
            return response()->json(1);
        } catch (Exception $e) {
            return response()->json(0);
        }
    }
}
