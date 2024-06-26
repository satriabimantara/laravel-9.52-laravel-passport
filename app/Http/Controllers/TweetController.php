<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    //
    public function index(Request $request)
    {
        $tweets = $request->user()->tweets()->with(['user'])->latestFirst()->get();
        $context = [
            'tweets' => $tweets
        ];
        return view('tweet.index', $context);
    }

    // store a new tweet
    public function store(Request $request)
    {
        $this->validate($request, [
            "body" => "required|max:144"
        ]);

        $tweet = $request->user()->tweets()->create([
            "body" => $request->input('body')
        ])->load('user');

        return redirect('tweets');
    }
}
