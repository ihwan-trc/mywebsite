<!-- ======= Header ======= -->
<header id="header" class="fixed-top {{ ($title === "Shop") || ($title === "Tutorial") || ($title === "Portfolio") ? 'header-inner-pages' : '' }}">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="/">Arsha</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a></li>
          <li><a class="nav-link scrollto {{ ($title === "Shop") ? 'active' : '' }}" href="/shop">Shop</a></li>
          <li><a class="nav-link scrollto {{ ($title === "Tutorial") ? 'active' : '' }}" href="/tutorial">Tutorial</a></li>
          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/layanan">Website <span class="badge bg-danger">HOT</span></a></li>
              <li><a href="#">Desain Logo</a></li>
              <li><a href="#">Mobile App</a></li>
              <li><a href="#">SEO</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{ ($title === "Portfolio") ? 'active' : '' }}" href="/portfolio">Portfolio <span class="badge bg-info">New</span></a></li>
          <li><a class="nav-link scrollto {{ ($title === "Team") ? 'active' : '' }}" href="/team">Team</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->