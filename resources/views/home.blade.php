<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SweetBite Bakery — Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    .custom-nav {
      background-color: #8B4513;
    }
    .logo-mark {
      width: 32px;
      height: 32px;
      background-color: #fff;
      color: #8B4513;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 0.9rem;
    }
    .brand-text {
      font-weight: bold;
      color: #fff;
    }
    .nav-hover:hover {
      color: #FFD700 !important;
    }
    .nav-cta {
      background-color: #FFD700;
      border: none;
      font-weight: 500;
    }
    .hero {
      background: linear-gradient(135deg, #8B4513 0%, #A0522D 100%);
      color: white;
      padding: 80px 0;
    }
    .text-highlight {
      color: #FFD700;
    }
    .badge-soft {
      background: rgba(255, 255, 255, 0.2);
      color: white;
      padding: 8px 16px;
      border-radius: 20px;
      display: inline-block;
      font-size: 0.9rem;
    }
    .hero-image-wrap {
      position: relative;
    }
    .hero-image-main {
      height: 400px;
      background: linear-gradient(45deg, #D2691E, #F4A460);
      border-radius: 20px;
      position: relative;
      overflow: hidden;
    }
    .hero-card {
      position: absolute;
      bottom: -20px;
      left: -20px;
      background: white;
      padding: 20px;
      border-radius: 12px;
      max-width: 250px;
    }
    .section-title {
      font-weight: 700;
      color: #8B4513;
    }
    .section-subtitle {
      color: #6c757d;
    }
    .link-more {
      color: #8B4513;
      text-decoration: none;
      font-weight: 500;
    }
    .product-card {
      border: none;
      border-radius: 12px;
      transition: transform 0.2s;
    }
    .product-card:hover {
      transform: translateY(-5px);
    }
    .product-img {
      height: 200px;
      background-size: cover;
      background-position: center;
      border-radius: 12px 12px 0 0;
    }
    .text-brown {
      color: #8B4513 !important;
    }
    .bg-light-subtle {
      background-color: #f8f9fa !important;
    }
    .feature-card {
      padding: 30px 20px;
    }
    .feature-icon {
      width: 70px;
      height: 70px;
      background: #8B4513;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
      color: white;
      font-size: 1.5rem;
    }
    .testimonial-card {
      background: white;
      padding: 25px;
      border-radius: 12px;
      border: 1px solid #e9ecef;
    }
    .cta-section {
      background: linear-gradient(135deg, #8B4513 0%, #A0522D 100%);
    }
    .cta-card {
      background: white;
      padding: 40px;
      border-radius: 20px;
      display: flex;
      justify-content: between;
      align-items: center;
      gap: 20px;
    }
    .footer {
      background: #2c1810;
      color: white;
      padding: 40px 0;
    }
    .footer-links {
      display: flex;
      justify-content: center;
      gap: 30px;
    }
    .footer-links a {
      color: white;
      text-decoration: none;
    }
    .footer-links a:hover {
      color: #FFD700;
    }
    .icon-soft {
      color: #FFD700;
    }
    
    /* Dynamic product image styles */
    .dynamic-product-img {
      height: 200px;
      background-size: cover;
      background-position: center;
      border-radius: 12px 12px 0 0;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark custom-nav shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="{{route('home.index')}}">
        <span class="logo-mark me-2">SB</span>
        <span class="brand-text">
          SweetBite <span class="fw-normal">Bakery</span>
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item">
            <a class="nav-link nav-hover active" href="{{route('home.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover" href="{{route('home.about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover" href="{{route('home.order')}}">Order</a>
          </li>
          <li class="nav-item ms-lg-2">
            <a class="btn btn-light btn-sm rounded-pill nav-cta" href="{{route('home.order')}}">
              <i class="bi bi-bag-heart-fill me-1"></i> Order Now
            </a>
          </li>
          <li class="nav-item ms-lg-2">
            <a class="nav-link nav-hover small" href="{{route('home.admin')}}">
              <i class="bi bi-speedometer2 me-1"></i>Admin
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <!-- Hero -->
    <header class="hero">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-lg-6">
            <p class="badge-soft mb-3">
              <i class="bi bi-stars me-1"></i> Freshly baked, every single morning
            </p>
            <h1 class="display-5 fw-bold mb-3">
              Sweet moments, <span class="text-highlight">baked</span> to perfection.
            </h1>
            <p class="lead text-muted mb-4">
              From birthday cakes to everyday bread, we craft soft, fresh and flavourful bakes that turn your small moments into big celebrations.
            </p>
            <div class="d-flex flex-wrap gap-2">
              <a href="{{route('home.order')}}" class="btn btn-primary btn-lg rounded-pill">
                Place an order
              </a>
              <a href="{{route('home.about')}}" class="btn btn-outline-light btn-lg rounded-pill text-white border-2">
                Learn our story
              </a>
            </div>
            <div class="mt-4 d-flex flex-wrap gap-3 hero-meta">
              <div class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill icon-soft"></i>
                <span class="small text-muted">Same-day pickup on selected items</span>
              </div>
              <div class="d-flex align-items-center gap-2">
                <i class="bi bi-heart-fill icon-soft"></i>
                <span class="small text-muted">Custom designs for any event</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image-wrap">
              <div class="hero-image-main"></div>
              <div class="hero-card shadow-sm">
                <p class="mb-1 small text-muted">This week&apos;s bestseller</p>
                <h3 class="h5 mb-1">Strawberry Drip Cake</h3>
                <p class="mb-0 small text-muted">Layers of vanilla sponge, fresh cream &amp; strawberries.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Popular products -->
    <section class="py-5">
      <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-end mb-4 gap-2">
          <div>
            <h2 class="section-title mb-1">Popular this week</h2>
            <p class="section-subtitle mb-0">A quick taste of what everyone is loving right now.</p>
          </div>
          <a href="{{route('home.order')}}" class="link-more small">
            View full menu <i class="bi bi-arrow-right-short"></i>
          </a>
        </div>

       <div class="row g-4">
    @foreach($popularProducts as $product)
    <div class="col-md-4">
        <div class="card product-card h-100">
            
            
            @if($product->image)
            <div class="dynamic-product-img" style="background-image: url('{{ asset('storage/app/public/' . $product->image) }}')"></div>
            @else
            <div class="dynamic-product-img" style="background: linear-gradient(45deg, #f4a460, #d2691e); display: flex; align-items: center; justify-content: center; color: white;">
                <i class="bi bi-image" style="font-size: 2rem;"></i>
            </div>
            @endif
            <div class="card-body">
                <h5 class="card-title mb-1">{{ $product->name }}</h5>
                <p class="card-text small text-muted">
                    {{ $product->description }}
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold text-brown">UGX {{ number_format($product->price, 0) }}</span>
                    <a href="{{route('home.order')}}" class="btn btn-sm btn-outline-primary rounded-pill">Order</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
      </div>
    </section>

    <!-- Why choose us -->
    <section class="py-5 bg-light-subtle">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-5">
            <h2 class="section-title mb-3">Why customers stick with us</h2>
            <p class="section-subtitle">
              We combine fresh ingredients, careful hygiene and a lot of care in every batch we bake.
            </p>
          </div>
          <div class="col-lg-7">
            <div class="row g-4">
              <div class="col-md-4">
                <div class="feature-card text-center">
                  <div class="feature-icon">
                    <i class="bi bi-egg-fried"></i>
                  </div>
                  <h5 class="mt-3 mb-1">Fresh ingredients</h5>
                  <p class="small text-muted">No shortcuts. Quality flour, butter and toppings in every item.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="feature-card text-center">
                  <div class="feature-icon">
                    <i class="bi bi-bandaid"></i>
                  </div>
                  <h5 class="mt-3 mb-1">Hygienic kitchen</h5>
                  <p class="small text-muted">Clean workspaces, food-safe handling and consistent checks.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="feature-card text-center">
                  <div class="feature-icon">
                    <i class="bi bi-clock-history"></i>
                  </div>
                  <h5 class="mt-3 mb-1">On-time orders</h5>
                  <p class="small text-muted">Clear pickup times and reliable delivery for big days.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-5">
            <h2 class="section-title mb-3">Loved by our customers</h2>
            <p class="section-subtitle">
              Here&apos;s what people say after picking their cakes and bread from us.
            </p>
          </div>
          <div class="col-lg-7">
            <div class="row g-3">
              <div class="col-md-6">
                <div class="testimonial-card h-100">
                  <p class="small mb-2">
                    &ldquo;The birthday cake was super soft and not overly sweet. Everyone kept asking where we ordered from.&rdquo;
                  </p>
                  <p class="mb-0 fw-semibold small">Amina, parent</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="testimonial-card h-100">
                  <p class="small mb-2">
                    &ldquo;We use their buns for office tea break. Always fresh, always on time.&rdquo;
                  </p>
                  <p class="mb-0 fw-semibold small">Brian, office admin</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="testimonial-card h-100">
                  <p class="small mb-2">
                    &ldquo;They helped us design a simple but elegant wedding cake within budget. 10/10 service.&rdquo;
                  </p>
                  <p class="mb-0 fw-semibold small">Sarah &amp; Musa</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="testimonial-card h-100">
                  <p class="small mb-2">
                    &ldquo;Ordering is very straightforward and they keep you updated on your order status.&rdquo;
                  </p>
                  <p class="mb-0 fw-semibold small">Michael, regular</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="py-5 cta-section">
      <div class="container">
        <div class="cta-card">
          <div>
            <h2 class="mb-1">Have a celebration coming up?</h2>
            <p class="mb-0 text-muted">
              Tell us your date, theme and budget &mdash; we&apos;ll suggest cake ideas that fit.
            </p>
          </div>
          <a href="{{route('home.order')}}" class="btn btn-primary btn-lg rounded-pill">
            Start an order
          </a>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="footer mt-auto">
    <div class="container">
      <div class="row align-items-center gy-3">
        <div class="col-md-4 text-center text-md-start">
          <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2">
            <span class="logo-mark small">SB</span>
            <span class="fw-semibold">SweetBite Bakery</span>
          </div>
          <p class="small text-light mt-2 mb-0">
            Fresh bread, cakes and treats for everyday moments and special days.
          </p>
        </div>
        <div class="col-md-4">
          <div class="footer-links">
            <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('home.about')}}">About</a>
            <a href="{{route('home.order')}}">Order</a>
          </div>
        </div>
        <div class="col-md-4 text-center text-md-end">
          <p class="small mb-1">&copy; <span id="yearSpan"></span> SweetBite Bakery. All rights reserved.</p>
          <p class="small mb-0">
            <i class="bi bi-geo-alt-fill"></i> Kampala &bull; <i class="bi bi-telephone-fill"></i> +256 700 000000
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // simple dynamic year
    document.getElementById('yearSpan').textContent = new Date().getFullYear();
  </script>
</body>
</html>