<?php

Route::get('/', 'HomeController@index');
Route::get('/api', 'HomeController@api')->name('starwars');
