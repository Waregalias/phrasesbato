<?php

Route::get('/', 'PostController@read');
Route::post('/post', 'PostController@write');
Route::get('/search', 'PostController@search')->name('search');

// User Route
// TODO: Implement Auth MVC
Route::get('/login', 'UserController@login_form')->name('login');
Route::get('/register', 'UserController@create')->name('register');
Route::post('/login', 'UserController@login')->name('login');
Route::post('/register', 'UserController@store')->name('register');
