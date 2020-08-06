<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::post('/tweets', 'TweetController@store');
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/profiles/{user:username}/follow', 'FollowsController@store');
    Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'ProfileController@update');
});

Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profile');

Auth::routes();
