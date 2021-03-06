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


Route::get('/', "ClothController@items")->name('home');

Route::post('/', "ClothController@store");

Route::get('/feed', function(){
    return view('feed');
});



Route::get('/fits', "OutfitController@fits")->name('fits');

Route::post('/fits', "OutfitController@store");



Route::get('/profile', function(){
    return view('profile');
});


Route::get('/login', function(){
    return view('login');
});

Route::get('/newitem', 'ClothController@itemForm');

Route::get('/feed', "FeedController@feed");
