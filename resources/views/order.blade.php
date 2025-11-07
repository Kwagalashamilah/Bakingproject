<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Custom Order — SweetBite Bakery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .form-card { max-width: 900px; margin: 2rem auto; }
    footer { background:#222; color:#fff; padding:1rem 0; margin-top:2rem; }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="home.html">SweetBite Bakery</a>
      <div class="collapse navbar-collapse" id="navMenu"></div>
    </div>
  </nav>

  <main class="container">
    <div class="card form-card shadow-sm">
      <div class="card-body">
        <h2 class="card-title mb-3">Custom Cake Order</h2>
        <p class="text-muted">Fill the form below with your details and the cake specifications. We'll review and confirm by phone/email.</p>

        <!-- NOTE: Change action to your Laravel route or Blade directive -->
        <form action="/orders" method="POST" enctype="multipart/form-data">
          <!-- If using Blade: @csrf -->
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Full name</label>
              <input name="customer_name" class="form-control" type="text" placeholder="Full name" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input name="email" class="form-control" type="email" placeholder="Email" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Phone number</label>
              <input name="phone" class="form-control" type="tel" placeholder="+256 7XX XXX XXX" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Pickup date</label>
              <input name="pickup_date" class="form-control" type="date" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Cake type</label>
              <select name="cake_type" class="form-select" required>
                <option value="">Choose...</option>
                <option>Birthday cake</option>
                <option>Wedding cake</option>
                <option>Cupcakes</option>
                <option>Anniversary cake</option>
                <option>Custom design</option>
              </select>
            </div>

            <div class="col-md-6">
              <label class="form-label">Size / servings</label>
              <input name="size" class="form-control" type="text" placeholder="e.g., 8 inch / 12 servings" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Flavor</label>
              <select name="flavor" class="form-select" required>
                <option value="">Choose...</option>
                <option>Vanilla</option>
                <option>Chocolate</option>
                <option>Red velvet</option>
                <option>Carrot</option>
                <option>Custom</option>
              </select>
            </div>

            <div class="col-md-6">
              <label class="form-label">Budget (UGX)</label>
              <input name="budget" class="form-control" type="number" min="0" placeholder="e.g., 50000">
            </div>

            <div class="col-12">
              <label class="form-label">Design description / Message</label>
              <textarea name="message" class="form-control" rows="4" placeholder="Describe colors, text, theme, special requests..."></textarea>
            </div>

            <div class="col-md-6">
              <label class="form-label">Reference image (optional)</label>
              <input name="reference_image" class="form-control" type="file" accept="image/*">
            </div>

            <div class="col-12 d-flex justify-content-end">
              <button type="reset" class="btn btn-outline-secondary me-2">Reset</button>
              <button type="submit" class="btn btn-primary">Submit Order</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </main>

  <!-- <footer>
    <div class="container d-flex justify-content-between">
      <div>© 2025 SweetBite Bakery</div>
      <div>Questions? hello@sweetbite.example</div>
    </div>
  </footer> -->
  <footer class="footer mt-5">
  <div class="container py-4 text-center">
    
    <!-- Nav links -->
    <div class="footer-links mb-2">
      <a href="home.html" class="text-decoration-none text-white mx-1">Home</a>
      <a href="about.html" class="text-decoration-none text-white mx-1">About</a>
      <a href="order.html" class="text-decoration-none text-white mx-1">Order</a>
      <!-- <a href="admin.html" class="text-decoration-none text-white mx-1">Admin</a> -->
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
