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
        @foreach ($services as $service)
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <h3><a href="/layanan/{{ $service['slug'] }}">{{ $service['title'] }}</a></h3>
            <h4><span>{{ $service['harga'] }}</span></h4>
            <ul>
              <li><i class="bx bx-check"></i>{{ $service['body'] }}</li>
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
        @foreach ($advertisements as $advertisement)
        <div class="col-lg-9 text-center text-lg-start">
          <h3>{{ $advertisement['title'] }}</h3>
          <p> {{ $advertisement['body'] }}</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#">Konsultasi Gratis</a>
        </div>
        @endforeach
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
      @foreach ($advantages as $advantage)
        <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">{{ $advantage['title'] }}</a></h4>
            <p>{{ $advantage['body'] }}</p>
          </div>
        </div>
        @endforeach
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