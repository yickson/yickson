<?php

Route::get('/', 'HomeController@index');
Route::get('/api', 'HomeController@api')->name('starwars');
Route::get('/blog', 'HomeController@blog')->name('blog');
