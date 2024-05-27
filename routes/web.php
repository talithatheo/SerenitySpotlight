<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/Merchandise', function () {
    return view('Merchandise');
});