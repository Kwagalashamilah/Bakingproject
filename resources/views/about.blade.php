<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SweetBite Bakery — About</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark custom-nav shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="home.html">
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
    <section class="py-5">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6">
            <h1 class="mb-3 section-title">Our story</h1>
            <p class="lead-para">
              SweetBite Bakery started as a small home kitchen, baking simple birthday cakes and buns for family and neighbours. Word spread quickly, and soon weekends turned into steady orders for schools, offices and community events.
            </p>
            <p class="lead-para">
              Today, we still keep the same heart: soft, fresh bakes made with care, fair prices and clear communication with our customers &mdash; whether you&apos;re buying a single loaf or a multi-tier wedding cake.
            </p>
          </div>
          <div class="col-lg-6">
            <div class="about-grid">
              <div class="about-card">
                <h3 class="h5 mb-1">Our mission</h3>
                <p class="small text-muted mb-0">
                  To make reliable, delicious baked goods that people can afford and trust for their everyday tables and special milestones.
                </p>
              </div>
              <div class="about-card">
                <h3 class="h5 mb-1">Our promise</h3>
                <p class="small text-muted mb-0">
                  We communicate clearly about pricing, design and pickup time, so there are no surprises on your big day.
                </p>
              </div>
              <div class="about-card">
                <h3 class="h5 mb-1">Our values</h3>
                <ul class="small text-muted mb-0 ps-3">
                  <li>Consistency in taste and quality</li>
                  <li>Respect for customer budgets</li>
                  <li>Honest timelines and feedback</li>
                </ul>
              </div>
              <div class="about-card">
                <h3 class="h5 mb-1">Community</h3>
                <p class="small text-muted mb-0">
                  We love providing bakes for school events, fundraisers and small businesses around us.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Stats -->
        <div class="row g-3 mt-5">
          <div class="col-md-3 col-6">
            <div class="stat-card">
              <span class="stat-number">5+</span>
              <span class="stat-label">years baking</span>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="stat-card">
              <span class="stat-number">1000+</span>
              <span class="stat-label">birthday cakes</span>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="stat-card">
              <span class="stat-number">50+</span>
              <span class="stat-label">weddings served</span>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="stat-card">
              <span class="stat-number">4.8</span>
              <span class="stat-label">average rating</span>
            </div>
          </div>
        </div>

        <!-- How ordering works -->
        <div class="row g-4 mt-5 align-items-start">
          <div class="col-lg-5">
            <h2 class="section-title mb-3">How ordering works</h2>
            <p class="section-subtitle">
              We keep the process straightforward so you can focus on planning your event.
            </p>
          </div>
          <div class="col-lg-7">
            <ol class="timeline">
              <li>
                <h3 class="h6 mb-1">1. Share the details</h3>
                <p class="small text-muted mb-0">Tell us the date, type of event, number of people and your rough budget.</p>
              </li>
              <li>
                <h3 class="h6 mb-1">2. Confirm design and price</h3>
                <p class="small text-muted mb-0">We suggest flavour, size and design options. Once you pick one, we confirm the final quote.</p>
              </li>
              <li>
                <h3 class="h6 mb-1">3. Deposit &amp; baking</h3>
                <p class="small text-muted mb-0">For large cakes, we take a small deposit to lock the date. Then we start planning your bake.</p>
              </li>
              <li>
                <h3 class="h6 mb-1">4. Pickup or delivery</h3>
                <p class="small text-muted mb-0">You can pick up from the bakery or arrange delivery at a small extra cost (depending on location).</p>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="py-5 cta-section">
      <div class="container">
        <div class="cta-card">
          <div>
            <h2 class="mb-1">Ready to plan your cake?</h2>
            <p class="mb-0 text-muted">
              Use our order form to share your idea, and we will reply with suggestions and a clear quote.
            </p>
          </div>
          <a href="order.html" class="btn btn-primary btn-lg rounded-pill">
            Go to order form
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
            <a href="home.html">Home</a>
            <a href="about.html">About</a>
            <a href="order.html">Order</a>
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
    document.getElementById('yearSpan').textContent = new Date().getFullYear();
  </script>
</body>
</html>
