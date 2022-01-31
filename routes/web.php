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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/shop', function () {
    return view('shop', [
        "title" => "Shop"
    ]);
});

Route::get('/tutorial', function () {
    return view('tutorial', [
        "title" => "Tutorial"
    ]);
});

Route::get('/website', function () {
    return view('website', [
        "title" => "Website"
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio', [
        "title" => "Portfolio"
    ]);
});

Route::get('/team', function () {
    return view('team', [
        "title" => "Team"
    ]);
});
