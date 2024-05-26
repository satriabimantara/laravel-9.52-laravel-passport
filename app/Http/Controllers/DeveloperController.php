<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;

class DeveloperController extends Controller
{
    //
    public function index()
    {

        return view('developer.index');
    }

    public function personal_token_view()
    {
        return view('developer.personaltoken');
    }
    public function personal_token_create(Request $request)
    {
        $this->validate($request, [
            "name_personal_token" => "required|max:50"
        ]);
        $user = User::find(Auth::user()->id);
        $token = $user->createToken($request->input('name_personal_token'))->accessToken;
        ddd($token);
    }
}
