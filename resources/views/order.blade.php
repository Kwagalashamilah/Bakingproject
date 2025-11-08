<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SweetBite Bakery — Order</title>
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
            <a class="nav-link nav-hover" href="{{route('home.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover" href="{{route('home.about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover active" href="{{route('home.order')}}">Order</a>
          </li>
          <li class="nav-item ms-lg-2">
            <a class="btn btn-light btn-sm rounded-pill nav-cta" href="{{route('home.order')}}">
              <i class="bi bi-bag-heart-fill me-1"></i> Order Now
            </a>
          </li>
          <li class="nav-item ms-lg-2">
            <a class="nav-link nav-hover small" href="admin.html">
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
        <div class="row g-4">
          <div class="col-lg-7">
            <h1 class="mb-3 section-title">Place an order</h1>
            <p class="section-subtitle mb-4">
              Share your details below. This form is designed for a simple static system &mdash; you can later connect it to a backend or Google Form.
            </p>
            <div class="card form-card">
              <div class="card-body">
                <form>
                  <h2 class="h5 mb-3">Contact details</h2>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label for="name" class="form-label">Full name</label>
                      <input type="text" class="form-control" id="name" placeholder="e.g. Amina N." required>
                    </div>
                    <div class="col-md-6">
                      <label for="phone" class="form-label">Phone number</label>
                      <input type="tel" class="form-control" id="phone" placeholder="+256..." required>
                    </div>
                    <div class="col-md-6">
                      <label for="email" class="form-label">Email (optional)</label>
                      <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    </div>
                    <div class="col-md-6">
                      <label for="whatsapp" class="form-label">WhatsApp (optional)</label>
                      <input type="tel" class="form-control" id="whatsapp" placeholder="+256...">
                    </div>
                  </div>

                  <hr class="my-4">

                  <h2 class="h5 mb-3">Event &amp; pickup</h2>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label for="eventType" class="form-label">Event type</label>
                      <select id="eventType" class="form-select">
                        <option selected disabled>Choose...</option>
                        <option>Birthday</option>
                        <option>Wedding / Introduction</option>
                        <option>Graduation</option>
                        <option>Office / School</option>
                        <option>Casual / Home</option>
                        <option>Other</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label for="date" class="form-label">Pickup date</label>
                      <input type="date" class="form-control" id="date" required>
                    </div>
                    <div class="col-md-3">
                      <label for="time" class="form-label">Pickup time</label>
                      <input type="time" class="form-control" id="time" required>
                    </div>
                    <div class="col-md-6">
                      <label for="orderType" class="form-label">Order type</label>
                      <select id="orderType" class="form-select">
                        <option selected>Pickup from bakery</option>
                        <option>Delivery (extra cost)</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="location" class="form-label">Delivery location (if delivery)</label>
                      <input type="text" class="form-control" id="location" placeholder="e.g. Bunga, near ...">
                    </div>
                  </div>

                  <hr class="my-4">

                  <h2 class="h5 mb-3">Cake / bake details</h2>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label for="productType" class="form-label">What would you like?</label>
                      <select id="productType" class="form-select" required>
                        <option selected disabled>Choose...</option>
                        <option>Birthday cake</option>
                        <option>Wedding cake</option>
                        <option>Cupcakes</option>
                        <option>Bread &amp; Buns</option>
                        <option>Donuts</option>
                        <option>Cookies</option>
                        <option>Other custom bake</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="flavour" class="form-label">Flavour</label>
                      <select id="flavour" class="form-select">
                        <option selected disabled>Choose...</option>
                        <option>Vanilla</option>
                        <option>Chocolate</option>
                        <option>Strawberry</option>
                        <option>Red velvet</option>
                        <option>Marble</option>
                        <option>Other (describe below)</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label for="size" class="form-label">Size / weight</label>
                      <select id="size" class="form-select">
                        <option selected disabled>Choose...</option>
                        <option>0.5 kg</option>
                        <option>1 kg</option>
                        <option>2 kg</option>
                        <option>3 kg</option>
                        <option>4+ kg (large)</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label for="servings" class="form-label">Approx. servings</label>
                      <input type="number" min="1" class="form-control" id="servings" placeholder="e.g. 20">
                    </div>
                    <div class="col-md-4">
                      <label for="budget" class="form-label">Budget (UGX)</label>
                      <input type="number" min="0" class="form-control" id="budget" placeholder="e.g. 80,000">
                    </div>
                    <div class="col-md-12">
                      <label for="message" class="form-label">Message on cake (if any)</label>
                      <input type="text" class="form-control" id="message" maxlength="60" placeholder="e.g. Happy 10th Birthday, Mariam!">
                      <div class="form-text">We recommend keeping it under 6&ndash;8 words.</div>
                    </div>
                    <div class="col-md-12">
                      <label for="details" class="form-label">Design idea &amp; extra details</label>
                      <textarea id="details" rows="4" class="form-control" placeholder="Colours, theme (e.g. football, princess, graduation), shape, any allergies, etc."></textarea>
                    </div>
                  </div>

                  <hr class="my-4">

                  <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <div class="form-check small">
                      <input class="form-check-input" type="checkbox" value="" id="confirmPolicy" required>
                      <label class="form-check-label" for="confirmPolicy">
                        I understand large cakes may require a deposit to confirm the date.
                      </label>
                    </div>
                    <div class="d-flex gap-2">
                      <button type="reset" class="btn btn-outline-secondary rounded-pill">Clear form</button>
                      <button type="submit" class="btn btn-primary rounded-pill">Submit order request</button>
                    </div>
                  </div>

                  <p class="small text-muted mt-3 mb-0">
                    Note: This form does not yet send anywhere. In a real system, you would connect it to a backend (PHP, Node, Django, etc.) or a Google Form.
                  </p>
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="order-summary">
              <h2 class="h5 mb-3">What to know before ordering</h2>
              <ul class="small text-muted mb-3">
                <li>For simple birthday cakes, a 2&ndash;3 day notice is usually enough.</li>
                <li>For big weddings or detailed designs, we recommend at least 1 week notice.</li>
                <li>Prices can change slightly depending on flavour, toppings and design complexity.</li>
                <li>Delivery is available within selected areas at an extra cost.</li>
              </ul>
              <div class="alert alert-warning small mb-0">
                <i class="bi bi-info-circle-fill me-2"></i>
                This is a demo system. Use it as a front-end template, then plug in your own backend logic.
              </div>

              <hr class="my-4">

              <h2 class="h6 text-brown mb-2">Quick example packages</h2>
              <ul class="small text-muted mb-0">
                <li>0.5 kg simple cake &mdash; from <strong>UGX 45,000</strong></li>
                <li>1 kg themed cake &mdash; from <strong>UGX 80,000</strong></li>
                <li>20 cupcakes box &mdash; from <strong>UGX 60,000</strong></li>
                <li>Office tea buns (30 pieces) &mdash; from <strong>UGX 30,000</strong></li>
              </ul>
            </div>
          </div>
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
            <i class="bi bi-geo-alt-fill"></i> Kampala &bull; <i class="bi-telephone-fill bi"></i> +256 700 000000
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
