@extends('layouts.main')

@section('container')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
          <div class="row d-flex">
            <ol class="col-lg-8">
                <li><a href="index.html">Home</a></li>
                <li>Shop</li>
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
                {{-- <div class="portfolio-info">
                    <h3>KATEGORI PRODUK</h3>
                    <ul class="list-group">
                        @foreach ($categories as $category)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#">{{ $category['name'] }}</a>
                            <span class="badge bg-primary rounded-pill">{{ $category['jumlah'] }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div> --}}
                <div class="portfolio-info">
                    <h3>PALING LARIS</h3>
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
                <div class="portfolio-info">
                    <h3>PROMO</h3>
                    <ul>
                        <li><img src="https://source.unsplash.com/311x400/?e-book javascript" class="card-img-top" alt="..."></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                {{-- @if ($products->count())
                <div class="card mb-3">
                    @foreach ($products as $product)
                    <img src="https://source.unsplash.com/1200x400/?website" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title"><a href="/product/{{ $product['slug'] }}">{{ $product['title'] }}</a></h5>
                      <h5>{{ $product['author'] }}</h5>
                      <p>{{ $product['body'] }}</p>
                      <button type="button" class="btn btn-primary btn-sm">Rp 145.000</button>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-center fs-4">No product found.</p>
                @endif --}}
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-lg-3 mb-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <img src="https://source.unsplash.com/200x200/?mobile application" class="img-fluid" alt="">
                            <h2>
                                <a href="/product/{{ $product->slug }}">{{ $product->title }}</a>
                            </h2>
                            <p>By. <a href="">{{ $product->user->name }}</a></p>
                            <p>{{ $product->excerpt }}</p>
                            <a class="btn btn-primary btn-sm" href="/product/{{ $product->slug }}">Rp 145.000</a>
                        </div>
                    </div>
                    @endforeach
                
                </div>
            </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection