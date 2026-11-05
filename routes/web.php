<?php

use App\Http\Controllers\Pagecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Pagecontroller::class, 'landing']);
Route::get('/about', [Pagecontroller::class, 'about']);
Route::get('/contact', [Pagecontroller::class, 'contact']);
Route::get('/news', [Pagecontroller::class, 'news']);
Route::get('/report-us', [Pagecontroller::class, 'reportUs']);
Route::get('/profile', [Pagecontroller::class, 'profile']);
