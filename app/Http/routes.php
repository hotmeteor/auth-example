<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/home', 'HomeController@index');

    Route::get('/users/{user}', 'UsersController@show');

    Route::get('/top-secret')
        ->uses('TopSecretController@index')
        ->middleware('can:top_secret.index');

});
