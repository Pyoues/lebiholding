<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front-end.index');
});

Route::get('/about', function () {
    return view('front-end.about');
});

Route::get('/motpdg', function () {
    return view('front-end.motpdg');
});

Route::get('/contact', function () {
    return view('front-end.contact');
});

Route::get('/detail-property', function () {
    return view('front-end.detail-property');
});

/*----- pour les annonces-------*/
Route::get('/list-property', function () {
    return view('front-end.list-property');
});
