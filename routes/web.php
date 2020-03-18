<?php

use App\Data;
use Illuminate\Support\Facades\DB;

Route::apiResource('/data', 'DataController');

Route::get('/', function () {
    return view('welcome');
});
