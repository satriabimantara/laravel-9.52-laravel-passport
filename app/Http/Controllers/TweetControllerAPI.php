<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetControllerAPI extends Controller
{
    //
    public function index(Request $request)
    {
        $tweets = $request->user()->tweets()->with(['user'])->latestFirst()->get();
        return $tweets;
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

        return $tweet;
    }
}
