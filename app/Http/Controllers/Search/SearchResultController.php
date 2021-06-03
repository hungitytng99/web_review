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
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        $str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
        $str = preg_replace("/( )/", '-', $str);
        $str = preg_replace('/-/', '', $str);
        return strtolower($str);
    }
}
