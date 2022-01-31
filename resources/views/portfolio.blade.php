@extends('layouts.main')

@section('container')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
          <div class="row d-flex">
            <ol class="col-lg-8">
                <li><a href="index.html">Home</a></li>
                <li>Portfolio</li>
            </ol>
            <div class="col-lg-4">
                <input class="form-control"  placeholder="search product...">
            </div>
          </div>
        
      </div>
    </section><!-- End Breadcrumbs -->
    
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>KATEGORI</h3>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Website
                          <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Mobile App
                          <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Desain Logo
                          <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Template Website
                            <span class="badge bg-primary rounded-pill">1</span>
                          </li>
                      </ul>
                </div>
                <div class="portfolio-info">
                    <h3>TERBARU</h3>
                    <div class="d-flex">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <span class="badge bg-primary">Rp 120.000</span></p>
                        <img src="https://source.unsplash.com/300x300/?e-book javascript" class="card-img-top" alt="..." style="width: 80px; height: 70px;">
                    </div>
                    <div class="d-flex">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <span class="badge bg-primary">Rp 120.000</span></p>
                        <img src="https://source.unsplash.com/300x300/?e-book javascript" class="card-img-top" alt="..." style="width: 80px; height: 70px;">
                    </div>
                    <div class="d-flex">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <span class="badge bg-primary">Rp 120.000</span></p>
                        <img src="https://source.unsplash.com/300x300/?e-book javascript" class="card-img-top" alt="..." style="width: 80px; height: 70px;">
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-3">
                    <img src="https://source.unsplash.com/1200x400/?website" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content</p>
                      <button type="button" class="btn btn-primary btn-sm">Rp 145.000</button>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-lg-3 mb-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <img src="https://source.unsplash.com/200x200/?mobile application" class="img-fluid" alt="">
                            <h4><a href="">Layanan All in One</a></h4>
                            <p>Tak hanya Website, Gheptech juga bisa membuatkan...</p>
                            <button type="button" class="btn btn-primary btn-sm">Rp 145.000</button>
                        </div>
                    </div>
        
                    <div class="col-lg-3 mb-3 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <img src="https://source.unsplash.com/200x200/?web app" class="img-fluid" alt="">
                            <h4><a href="">Banyak Bonus Gratis</a></h4>
                            <p>Disetiap Paket Website. Gheptech akan memberikan...</p>
                            <button type="button" class="btn btn-primary btn-sm">Rp 145.000</button>
                        </div>
                    </div>
        
                    <div class="col-lg-3 mb-3 mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <img src="https://source.unsplash.com/200x200/?application" class="img-fluid" alt="">
                            <h4><a href="">Harga Bisa Request</a></h4>
                            <p>Suka sama Gheptech tapi Harga belum cocok ? Santai...</p>
                            <button type="button" class="btn btn-primary btn-sm">Rp 145.000</button>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-3 mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <img src="https://source.unsplash.com/200x200/?web programming" class="img-fluid" alt="">
                            <h4><a href="">Harga Bisa Request</a></h4>
                            <p>Suka sama Gheptech tapi Harga belum cocok ? Santai...</p>
                            <button type="button" class="btn btn-primary btn-sm">Rp 145.000</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection