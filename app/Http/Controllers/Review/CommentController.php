<?php

namespace App\Http\Controllers\Review;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Models\Comment;

class CommentController extends Controller
{
    // public function index()
    // {
    //     $comments = Comment::all();

    //     return view('Review.review', compact('comments'));
    // }

    // public function create()
    // {
    //     return view('review.review');
    // }

    // public function storeComment()
    // {
    //     // $review = new Comment();

    //     // $review->user_id = request('user_id');
    //     // $review->restaurant_id = request('restaurant_id');
    //     // $review->comment =request('comment');
    //     // $review->rate =request('rate');
    //     // $review->images =request('images');

    //     // $review->save();
    //     DB::insert('insert into reviews (user_id, restaurant_id,dish_id,comment,rate,images) values (?, ?,?, ?,?, ?)', [1,1,2, 'ngon',3,'/assets/avatars/default.png']);


    //     return redirect('/review');
    // }
    public function viewcomment()
    {
        return view('Review.review');
    }
    public function Comment(Request $request)
    {
        // dd($request);
        // dd($request->getPathInfo());
        $link = $request->getPathInfo();
        DB::insert('insert into reviews (user_id, restaurant_id,dish_id,comment,rate,images) values (?, ?,?, ?,?, ?)', [$request->user_id,$request->restaurant_id,$request->dish_id ,$request->comment, $request->rate,$request->images]);
        return redirect($link);
    }
}