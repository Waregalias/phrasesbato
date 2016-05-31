<?php

Route::get('/', 'PostController@read');
Route::post('post', 'PostController@write');
