<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // dd(DB::table('test')->get());
    // https://media.foody.vn/images/beauty-upload-api-675x355-%282%29-210412170953.jpg
    return view('welcome');
});
