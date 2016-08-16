<?php

// Landing page
Route::get('/', function () {
    return view('welcome');
});

// Auth-related routes (Laravel defaults)
Route::auth();

// Protected routes (must be logged in)
Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/home', 'HomeController@index');

    Route::get('/users/{user}', 'UsersController@show');

    Route::get('/top-secret')
        ->uses('TopSecretController@index')
        ->middleware('can:top_secret.index');

});
