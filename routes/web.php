<?php

use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/tweets', [TweetController::class, 'index'])->name('tweets');
Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/developer', [App\Http\Controllers\DeveloperController::class, 'index'])->name('developer');
    Route::get('/developer/personal-access-token', [App\Http\Controllers\DeveloperController::class, 'personal_token_view'])->name('developer.personaltoken');
    Route::post('/developer/personal-access-token', [App\Http\Controllers\DeveloperController::class, 'personal_token_create'])->name('developer.personaltoken.create');
});
