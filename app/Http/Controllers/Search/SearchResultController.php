<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;

class SearchResultController extends Controller
{
    function index(){
        return view('SearchResult/search_result');
    }
}
