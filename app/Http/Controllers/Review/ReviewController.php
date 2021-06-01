<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Review;

class ReviewController extends Controller
{
    public function review() {
        $images = Review::find(1);
        dump();
    }
}
