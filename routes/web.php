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
    $hero = [
        [
            "title" => "Solusi Lebih Baik Untuk Bisnis Anda",
            "body" => "Kami adalah tim desainer berbakat yang membuat aplikasi dan situs web sesuai dengan kebutuhan Anda"
        ]
    ];
    $layanan = [
        [
            "title" => "Build Website",
            "slug" => "build-website",
            "harga" => "Mulai Rp 800.000",
            "body" => "List layanan 1"
        ],
        [
            "title" => "Desain Logo",
            "slug" => "desain-logo",
            "harga" => "Mulai Rp 800.000",
            "body" => "List layanan 2"
        ],
        [
            "title" => "Mobile App",
            "slug" => "mobile-app",
            "harga" => "Mulai Rp 800.000",
            "body" => "List layanan 3"
        ],
        [
            "title" => "SEO",
            "slug" => "seo",
            "harga" => "Mulai Rp 800.000",
            "body" => "List layanan 4"
        ]
    ];
    return view('home', [
        "title" => "Home",
        "heros" => $hero,
        "layanans" => $layanan
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

Route::get('/layanan', function () {
    return view('layanan', [
        "title" => "Website"
    ]);
});

Route::get('/layanan/{slug}', function ($slug) {
    return view('layananweb', [
        "title" => $slug
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
