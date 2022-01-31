@extends('layouts.main')

@section('container')
<main id="main">

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

            @foreach ($heros as $hero)
               <h1>{{ $hero["title"] }}</h1>
               <h2>{{ $hero["body"] }}</h2>
            @endforeach

          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Layanan</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Profil Kami</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Layanan Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Layanan Unggulan</h2>
      </div>

      <div class="row">
        @foreach ($layanans as $layanan)

        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <h3><a href="/layanan/{{ $layanan['slug'] }}">{{ $layanan['title'] }}</a></h3>
            <h4><span>{{ $layanan['harga'] }}</span></h4>
            <ul>
              <li><i class="bx bx-check"></i>{{ $layanan['body'] }}</li>
              <!-- <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li> -->
            </ul>
            <a href="#" class="buy-btn">Detail</a>
          </div>
        </div>

        @endforeach
      </div>

    </div>
  </section><!-- End Layanan Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="row">
        <div class="col-lg-9 text-center text-lg-start">
          <h3>Gheptech Siap Jadi Andalanmu 👌</h3>
          <p> Andalan disetiap kebutuhan. Dari Jasa Pembuatan Website, Pembuatan Logo, Design Promosi, Naikkin Website kamu ke halaman 1 Google, sampai Fotoin produk kamu dengan Cantik. Semuanya bisa kamu dapatin disini. Hubungi Agent Jasterweb untuk Konsultasi Gratis</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#">Konsultasi Gratis</a>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Keuntungan Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Keuntungan menggunakan layanan Gheptech</h2>
      </div>

      <div class="row">
        <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Layanan All in One</a></h4>
            <p>Tak hanya Website, Gheptech juga bisa membuatkan kamu Design Promosi & Skalian Iklan di Google</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Banyak Bonus Gratis</a></h4>
            <p>Disetiap Paket Website. Gheptech akan memberikan Bonus yang sangat berguna buat bisnismu</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Harga Bisa Request</a></h4>
            <p>Suka sama Gheptech tapi Harga belum cocok ? Santai. Kamu bisa tentukan harga websitemu sendiri</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-layer"></i></div>
            <h4><a href="">Bisa Custom Website</a></h4>
            <p>Selain Web Company & Toko Online, Gheptech juga siap untuk membuat Website Kompleks / Custom</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-layer"></i></div>
            <h4><a href="">Alur Pekerjaan Jelas</a></h4>
            <p>Kami Memiliki Cara Kerja yang Efisien dan Profesional untuk membuat websitemu Go-Online dengan sangat baik</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-layer"></i></div>
            <h4><a href="">Garansi Selamanya</a></h4>
            <p>Tak perlu khawatir soal Support / Maintenance, Gheptech beri Garansi Seumur Hidup</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-layer"></i></div>
            <h4><a href="">Tatap Muka / Zoom Meeting</a></h4>
            <p>Jarak tak jadi masalah, Gheptech siap untuk Online Meeting demi terciptanya Solusi dari Kebutuhan kamu</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-layer"></i></div>
            <h4><a href="">Dipercaya 750 Lebih Client</a></h4>
            <p>Sejak 2015, Gheptech telah membantu UMKM, Start Up, PT hingga Instansi Pemerintahan</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Keuntungan Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients section-bg">
    <div class="container">

      <div class="row" data-aos="zoom-in">

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="/img/clients/client-1.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="/img/clients/client-2.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="/img/clients/client-3.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="/img/clients/client-4.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="/img/clients/client-5.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="/img/clients/client-6.png" class="img-fluid" alt="">
        </div>

      </div>

    </div>
  </section><!-- End Cliens Section -->

</main><!-- End #main -->
@endsection