<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    // public function getData()
    // {
    //     $id = 'nom-ong-phuc-nghia-tan';
    //     $result = DB::table('dishes_restaurants')
    //     ->join('dishes', 'dishes_restaurants.dishes_id', '=', 'dishes.id')
    //     ->join('restaurants', 'dishes_restaurants.restaurants_id', '=', 'restaurants.id')
    //     ->where('isOutstandingDish', '=', false)
    //     ->where('restaurants.id', '=', $id)
    //     ->get();
    //     dd($result);
    //     $restaurants = DB::table('restaurants')->get();
    //     $outstandingDishes = DB::table('dishes_restaurants')
    //         ->join('outstanding_dishes', 'dishes_restaurants.dishes_id', '=', 'outstanding_dishes.id')
    //         ->join('restaurants', 'dishes_restaurants.restaurants_id', '=', 'restaurants.id')
    //         ->where('isOutstandingDish', '=', true)
    //         ->select('restaurants.id', 'href', 'outstanding_dishes.name', DB::raw('concat(restaurants.name,": ",restaurants.location) as location'), 'description', 'outstanding_dishes.image')
    //         ->get();
    //     dd($restaurants);
    //     $outstandingDishesList = $this->handleOutstandingFood($outstandingDishes);
    //     // $id=$this->getId($Id);
    //     return view('Review/test2')
    //         ->with('restaurants', $restaurants)
    //         ->with('outstandingDishes', $outstandingDishesList);
    // }
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
                array_push($locationStore, $outstandingDishes[$i]->id);
                $outstandingDishesTemp->location = [];
                array_push($outstandingDishesTemp->location, $locationStore);
                $key[$i] = 1;
                for ($j = $i + 1; $j < count($outstandingDishes); $j++) {
                    if ($outstandingDishes[$j]->href === $outstandingDishes[$i]->href) {
                        $locationStore = [];
                        array_push($locationStore, $outstandingDishes[$j]->location);
                        array_push($locationStore, $outstandingDishes[$j]->id);
                        array_push($outstandingDishesTemp->location, $locationStore);
                        $key[$j] = 1;
                    }
                }
                array_push($outstandingDishesList, $outstandingDishesTemp);
                $outstandingDishesTemp=[];
            }
        }
        return $outstandingDishesList;
    }
    public function getId($Id)
    {
        // $id = 'nom-ong-phuc-nghia-tan';
        // $result = DB::table('dishes_restaurants')
        // ->join('dishes', 'dishes_restaurants.dishes_id', '=', 'dishes.id')
        // ->join('restaurants', 'dishes_restaurants.restaurants_id', '=', 'restaurants.id')
        // ->where('isOutstandingDish', '=', false)
        // ->where('restaurants.id', '=', $id)
        // ->get();
        $restaurants = DB::table('restaurants')->get();
        $outstandingDishes = DB::table('dishes_restaurants')
            ->join('outstanding_dishes', 'dishes_restaurants.dishes_id', '=', 'outstanding_dishes.id')
            ->join('restaurants', 'dishes_restaurants.restaurants_id', '=', 'restaurants.id')
            ->where('isOutstandingDish', '=', true)
            ->select('restaurants.id', 'href', 'outstanding_dishes.name', DB::raw('concat(restaurants.name,": ",restaurants.location) as location'), 'description', 'outstanding_dishes.image')
            ->get();
        $outstandingDishesList = $this->handleOutstandingFood($outstandingDishes);
        // dd($Id);
        return view('Review/test2')
            ->with('restaurants', $restaurants)
            ->with('Id', $Id)
            ->with('outstandingDishes', $outstandingDishesList);
    }
}