<?php

namespace App\Http\Controllers\Suggestion;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SuggestionController extends Controller
{
    function index()
    {
        return view('Suggestion/suggestion') ;
    }
}
