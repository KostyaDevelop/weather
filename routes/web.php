<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index');
});


Route::get('weather', 'Weather@get')->name('weather');
Route::get('weather_mail', 'Weather@mail')->name('weather_mail');
