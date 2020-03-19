<?php

use App\Data;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/overview', 'DataController@overview');
Route::get('/todayoverview', 'DataController@todayoverview');
Route::get('/country/{iso}', 'CountryData@getData');
Route::get('/cou', 'DataController@cou');
