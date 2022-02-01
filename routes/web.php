<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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
    $services = [
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
    $advertisements = [
        [
            "title" => "Gheptech Siap Jadi Andalanmu",
            "body" => "Andalan disetiap kebutuhan. Dari Jasa Pembuatan Website, Pembuatan Logo, Design Promosi, Naikkin Website kamu ke halaman 1 Google, sampai Fotoin produk kamu dengan Cantik. Semuanya bisa kamu dapatin disini. Hubungi Agent Gheptech untuk Konsultasi Gratis"
        ]

    ];
    $advantages = [
        [
            "title" => "Layanan All in One",
            "body" => "Tak hanya Website, Gheptech juga bisa membuatkan kamu Design Promosi & Skalian Iklan di Google"
        ],
        [
            "title" => "Banyak Bonus Gratis",
            "body" => "Disetiap Paket Website. Gheptech akan memberikan Bonus yang sangat berguna buat bisnismu"
        ],
        [
            "title" => "Harga Bisa Request",
            "body" => "Suka sama Gheptech tapi Harga belum cocok ? Santai. Kamu bisa tentukan harga websitemu sendiri"
        ],
        [
            "title" => "Bisa Custom Website",
            "body" => "Selain Web Company & Toko Online, Gheptech juga siap untuk membuat Website Kompleks / Custom"
        ],
        [
            "title" => "Alur Pekerjaan Jelas",
            "body" => "Kami Memiliki Cara Kerja yang Efisien dan Profesional untuk membuat websitemu Go-Online dengan sangat baik"
        ],
        [
            "title" => "Garansi Selamanya",
            "body" => "Tak perlu khawatir soal Support / Maintenance, Gheptech beri Garansi Seumur Hidup"
        ],
        [
            "title" => "Tatap Muka / Zoom Meeting",
            "body" => "Jarak tak jadi masalah, Gheptech siap untuk Online Meeting demi terciptanya Solusi dari Kebutuhan kamu"
        ],
        [
            "title" => "Dipercaya 750 Lebih Client",
            "body" => "Sejak 2015, Gheptech telah membantu UMKM, Start Up, PT hingga Instansi Pemerintahan"
        ]
    ];
    return view('home.index', [
        "title" => "Home",
        "heros" => $hero,
        "services" => $services,
        "advertisements" => $advertisements,
        "advantages" => $advantages
    ]);
});

Route::get('/shop', [ProductController::class, 'index']);

Route::get('product/{slug}', [ProductController::class, 'show']);

Route::get('/tutorial', function () {
    return view('tutorial.index', [
        "title" => "Tutorial"
    ]);
});

Route::get('/layanan', function () {
    return view('layanan.index', [
        "title" => "Website"
    ]);
});

Route::get('/layanan/{slug}', function ($slug) {
    return view('layanan.layananweb', [
        "title" => $slug
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio.index', [
        "title" => "Portfolio"
    ]);
});

Route::get('/team', function () {
    return view('team.index', [
        "title" => "Team"
    ]);
});
