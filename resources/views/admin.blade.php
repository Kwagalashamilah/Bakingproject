<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin — Orders</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    footer {background:#222;color:#fff;padding:1rem 0;margin-top:2rem;}
    .table-wrap { max-width: 1200px; margin: 2rem auto; }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="home.html">SweetBite Admin</a>
      <div class="collapse navbar-collapse" id="navMenu"></div>
    </div>
  </nav>

  <main class="container table-wrap">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Customer Orders</h2>
      <a href="#" class="btn btn-success">Create New</a>
    </div>

    <!-- Example table. In Laravel Blade you'd loop orders -->
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>Customer</th>
            <th>Type</th>
            <th>Pickup</th>
            <th>Budget</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Replace with server-side loop (Blade @foreach $orders as $order) -->
          <tr>
            <td>1</td>
            <td>Jane Doe</td>
            <td>Birthday cake</td>
            <td>2025-12-20</td>
            <td>100000</td>
            <td><span class="badge bg-warning text-dark">Pending</span></td>
            <td>
              <a href="/orders/1" class="btn btn-sm btn-outline-primary">View</a>
              <a href="/orders/1/edit" class="btn btn-sm btn-outline-secondary">Edit</a>
              <form action="/orders/1" method="POST" style="display:inline-block;">
                <!-- Blade: @csrf 
                 @method('DELETE') -->
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this order?')">Delete</button>
              </form>
            </td>
          </tr>

          <!-- incase you want to add more rows... -->
        </tbody>
      </table>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
