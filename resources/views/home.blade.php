<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SweetBite Bakery — Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero { background: linear-gradient(90deg, #fce4ec, #fff3e0); padding: 4rem 0; }
    .feature-icon { font-size: 2rem; }
    footer { background:#222; color:#fff; padding:1rem 0; }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">SweetBite Bakery</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="home.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="order.html">Custom Order</a></li>
          <li class="nav-item"><a class="nav-link" href="admin.html">Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <header class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1 class="display-5 fw-bold">Fresh Bakes, made For your Celebrations.</h1>
          <p class="lead">Birthday cakes, Donuts, Buns, bread and pastries for every celebration <br>baked with fresh and Nutricious ingredients.</p>
          <a href="order.html" class="btn btn-primary btn-lg">Place your Orders Now</a>
        </div>
        <div class="col-md-6 text-center">
          <!-- <img src="https://images.unsplash.com/photo-1548943487-a2e4e4b21b0d?auto=format&fit=crop&w=800&q=60" alt="Cakes" class="img-fluid rounded shadow"> -->
        </div>
      </div>
    </div>
  </header>

  <!-- Features -->
  <section class="py-5">
    <div class="container">
      <h2 class="mb-4">Why SweetBite?</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 p-3">
            <div class="card-body">
              <h5 class="card-title">Custom Designs</h5>
              <p class="card-text">Work with our Bakers to create and Design a cake tailored to your theme and taste.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 p-3">
            <div class="card-body">
              <h5 class="card-title">Fresh Ingredients</h5>
              <p class="card-text">We use locally-sourced ingredients — no preservatives, just real flavour.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 p-3">
            <div class="card-body">
              <h5 class="card-title">Timely Pickup</h5>
              <p class="card-text">Schedule a pickup date and we'll have your order ready on time.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer mt-5">
  <div class="container py-4 text-center">
    
    <!-- Nav links -->
    <div class="footer-links mb-2">
      <a href="home.html" class="text-decoration-none text-white mx-1">Home</a>
      <a href="about.html" class="text-decoration-none text-white mx-1">About</a>
      <a href="order.html" class="text-decoration-none text-white mx-1">Order</a>
      <a href="admin.html" class="text-decoration-none text-white mx-1">Admin</a>
    </div>

    <!-- Copyright -->
    <p class="mb-1 text-white small">© 2025 SweetBite Bakery — All Rights Reserved</p>

    <!-- Made with love (hidden on mobile) -->
    <p class="mb-0 small text-white d-none d-sm-block">
      Made with <span style="color:#ff6b81;">❤</span> by Yolamu Timothy.
    </p>
    
  </div>
</footer> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</html>
