<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SweetBite Bakery — Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
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
    .admin-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    .admin-header {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 8px;
      margin-bottom: 20px;
    }
    .product-image-preview {
      max-width: 200px;
      max-height: 150px;
      object-fit: cover;
      border-radius: 4px;
    }
    .table-actions {
      white-space: nowrap;
    }
  </style>
</head>
<body>
  
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
            <a class="nav-link nav-hover" href="{{route('home.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover" href="{{route('home.about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover" href="{{route('home.order')}}">Order</a>
          </li>
          <li class="nav-item ms-lg-2">
            <a class="btn btn-light btn-sm rounded-pill nav-cta" href="">
              <i class="bi bi-bag-heart-fill me-1"></i> Order Now
            </a>
          </li>
          <li class="nav-item ms-lg-2">
            <a class="nav-link nav-hover small active" href="{{route('home.admin')}}">
              <i class="bi bi-speedometer2 me-1"></i>Admin
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="admin-container">
    
    <div class="admin-header">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h1 class="h3 mb-1">Product Management</h1>
          <p class="text-muted mb-0">Add, edit, and manage bakery products</p>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal">
          <i class="bi bi-plus-circle me-1"></i> Add New Product
        </button>
      </div>
    </div>


    <div class="card shadow-sm">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td>{{ $product->id }}</td>
                <td>
                  @if($product->image)
                  <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image-preview">
                  @else
                  <span class="text-muted">No image</span>
                  @endif
                </td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category }}</td>
                <td>UGX {{ number_format($product->price, 0) }}</td>
                <td>
                  <span class="badge {{ $product->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                    {{ ucfirst($product->status) }}
                  </span>
                </td>
                <td class="table-actions">
                  <button class="btn btn-sm btn-outline-primary edit-product" 
                          data-id="{{ $product->id }}"
                          data-name="{{ $product->name }}"
                          data-category="{{ $product->category }}"
                          data-price="{{ $product->price }}"
                          data-description="{{ $product->description }}"
                          data-status="{{ $product->status }}">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this product?')">
                      <i class="bi bi-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        
        @if($products->isEmpty())
        <div class="text-center py-5">
          <i class="bi bi-inbox display-1 text-muted"></i>
          <p class="text-muted mt-3">No products found. Add your first product to get started.</p>
        </div>
        @endif
      </div>
    </div>
  </main>

  
  <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form id="productForm" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="productModalLabel">Add New Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="name" class="form-label">Product Name</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
                
                <div class="mb-3">
                  <label for="category" class="form-label">Category</label>
                  <select class="form-select" id="category" name="category" required>
                    <option value="">Select Category</option>
                    <option value="cakes">Cakes</option>
                    <option value="bread">Bread & Buns</option>
                    <option value="cupcakes">Cupcakes & Treats</option>
                    <option value="pastries">Pastries</option>
                  </select>
                </div>
                
                <div class="mb-3">
                  <label for="price" class="form-label">Price (UGX)</label>
                  <input type="number" class="form-control" id="price" name="price" min="0" step="100" required>
                </div>
                
                <div class="mb-3">
                  <label for="status" class="form-label">Status</label>
                  <select class="form-select" id="status" name="status" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                  </select>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="image" class="form-label">Product Image</label>
                  <input type="file" class="form-control" id="image" name="image" accept="image/*">
                  <div class="form-text">Recommended size: 400x300 pixels</div>
                  <div id="imagePreview" class="mt-2"></div>
                </div>
                
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save Product</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const productModal = document.getElementById('productModal');
      const productForm = document.getElementById('productForm');
      const modalTitle = document.getElementById('productModalLabel');
      const imageInput = document.getElementById('image');
      const imagePreview = document.getElementById('imagePreview');
      
      let isEditMode = false;
      let currentProductId = null;
      
      // Image preview
      imageInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            imagePreview.innerHTML = `<img src="${e.target.result}" class="product-image-preview" alt="Preview">`;
          }
          reader.readAsDataURL(file);
        } else {
          imagePreview.innerHTML = '';
        }
      });
      
      // Edit product button click
      document.querySelectorAll('.edit-product').forEach(button => {
        button.addEventListener('click', function() {
          isEditMode = true;
          currentProductId = this.getAttribute('data-id');
          
          // Set form values
          document.getElementById('name').value = this.getAttribute('data-name');
          document.getElementById('category').value = this.getAttribute('data-category');
          document.getElementById('price').value = this.getAttribute('data-price');
          document.getElementById('description').value = this.getAttribute('data-description');
          document.getElementById('status').value = this.getAttribute('data-status');
          
          // Update modal title and form action
          modalTitle.textContent = 'Edit Product';
          productForm.action = `/admin/products/${currentProductId}`;
          productForm.innerHTML += '<input type="hidden" name="_method" value="PUT">';
          
          // Show modal
          const modal = new bootstrap.Modal(productModal);
          modal.show();
        });
      });
      
      // Reset form when modal is hidden
      productModal.addEventListener('hidden.bs.modal', function() {
        isEditMode = false;
        currentProductId = null;
        productForm.reset();
        imagePreview.innerHTML = '';
        modalTitle.textContent = 'Add New Product';
        productForm.action = '/admin/products';
        
        // Remove any hidden _method field
        const methodField = productForm.querySelector('input[name="_method"]');
        if (methodField) {
          methodField.remove();
        }
      });
    });
  </script>
</body>
</html>