<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class SearchResultController extends Controller
{
    function index($params)
    {
       $result = $this->getResultRestaurant($params,9);;
        return view('SearchResult/search_result')
            ->with("paramsSearch", $params)
            ->with("listRestaurants", $result);
    }
    function returnSearchInput(Request $request)
    {
        // extract result
       $result = $this->getResultRestaurant($request->params,2);
        return response()->json($result);
    }
    function getResultRestaurant($params= "", $numOfRandomRestaurants = 2)
    {
        $result = [];
        $resultId = [];
        $restaurants = DB::table('restaurants')
            ->select('id', 'name', 'location', 'linkTo', 'rate', 'image')
            ->get();
        foreach ($restaurants as $restaurant) {
            if (count($result) == 2) {
                break;
            } else {
                if (strpos($this->convert_name($restaurant->name), $this->convert_name($params)) !== false) {
                    array_push($result, $restaurant);
                    array_push($resultId, $restaurant->id);
                }
            }
        }
        $extractCount = ['extractCount' => count($result)];
        // random restaurants for suggestion
        $randomRestaurants = $this->getNRandomNumber($numOfRandomRestaurants, count($restaurants), $resultId);
        foreach ($randomRestaurants as $restaurantId) {
            $restaurantsTemp = DB::table('restaurants')
                ->select('id', 'name', 'location', 'linkTo', 'rate', 'image')
                ->where('id', '=', $restaurantId)
                ->get();
            array_push($result, $restaurantsTemp[0]);
        }
        array_push($result, $extractCount);
        return $result;
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
    function convert_name($str)
    {
        $str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'a', $str);
        $str = preg_replace("/(??|??|???|???|???|??|???|???|???|???|???)/", 'e', $str);
        $str = preg_replace("/(??|??|???|???|??)/", 'i', $str);
        $str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'o', $str);
        $str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???)/", 'u', $str);
        $str = preg_replace("/(???|??|???|???|???)/", 'y', $str);
        $str = preg_replace("/(??)/", 'd', $str);
        $str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'A', $str);
        $str = preg_replace("/(??|??|???|???|???|??|???|???|???|???|???)/", 'E', $str);
        $str = preg_replace("/(??|??|???|???|??)/", 'I', $str);
        $str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'O', $str);
        $str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???)/", 'U', $str);
        $str = preg_replace("/(???|??|???|???|???)/", 'Y', $str);
        $str = preg_replace("/(??)/", 'D', $str);
        $str = preg_replace("/(\???|\???|\???|\???|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
        $str = preg_replace("/( )/", '-', $str);
        $str = preg_replace('/-/', '', $str);
        return strtolower($str);
    }
}
