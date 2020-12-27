<?php

use Illuminate\Support\Facades\Route;

Route::get('/',                 ['uses'=>'MoviesController@index',      'as'=>'movies.index']);
Route::get('/movies/{movie}',   ['uses'=>'MoviesController@show',       'as'=>'movies.show']);

