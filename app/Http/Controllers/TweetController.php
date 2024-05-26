<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    //
    public function index()
    {
        $tweets = Tweet::all();
        $context = [
            'tweets' => $tweets
        ];
        return view('tweet.index', $context);
    }
}
