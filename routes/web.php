<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/about/service', function () {
    return view('about');
});

Route::get('/contact' , function () {
    return view('contact');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/report-us', function () {
    return view('report-us');
});

