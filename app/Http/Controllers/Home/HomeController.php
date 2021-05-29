<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $restaurants = DB::table('restaurants')->get();
        return view('Home/home')->with('restaurants', $restaurants);
    }

}
