<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/google', 'Auth\LoginController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\LoginController@handleProviderCallback');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
