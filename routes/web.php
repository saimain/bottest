<?php

use App\Data;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/overview', 'DataController@overview');
Route::get('/todayoverview', 'DataController@todayoverview');
