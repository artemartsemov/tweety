<?php

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

Route::middleware('auth')->group(function (){
    Route::get('/explore', 'ExploreController');

    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store');

    Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');
    Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy');


    Route::post('/profile/{user}/follow','FollowsController@store');
    Route::get('/profile/{user}/edit',   'FollowsController@edit')->middleware('can:edit,user');
    Route::patch('/profile/{user}','ProfilesController@update')->middleware('can:edit,user');
});


Route::get('/profile/{user}','ProfilesController@show')->name('profile');

Auth::routes();
