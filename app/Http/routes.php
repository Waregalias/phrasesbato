<?php

Route::get('/', 'PostController@read');
Route::get('search', 'PostController@search');
Route::post('post', 'PostController@write');
