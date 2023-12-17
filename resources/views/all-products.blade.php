@extends('Layout.app')
@section('content')
<div class="page-content">
          <div class="container-fluid">
          <table class="table text-center">
            <thead>
                <tr>
                    <th>SL No</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>${{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                    <button class="btn btn-success sellBtn" data-bs-toggle="modal" data-bs-target="#sellModal" data-product-id="{{ $product->id }}">Sell</button>
                    <button class="btn btn-primary editBtn" data-bs-toggle="modal" data-bs-target="#editModal" data-product-id="{{ $product->id }}">Edit</button>
                    <button class="btn btn-danger deleteBtn" data-product-id="{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

<!-- Sell Modal -->
<div class="modal fade" id="sellModal" tabindex="-1" role="dialog" aria-labelledby="sellModalLabel" aria-hidden="true">
    <form action="{{ route('product-action') }}" method="post">
        @csrf
        <input type="hidden" name="action" value="sell">
        <input type="hidden" name="product_id" id="productId" value="">
        <input type="hidden" name="product_name" id="productName" value="">
        <input type="hidden" name="product_price" id="productPrice" value="">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sellModalLabel">Sell Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" min="1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Sell Product</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <!-- Edit form -->
    <form action="{{ route('product-action') }}" method="post">
        @csrf
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="product_id" id="editProductId" value="">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="editProductName">Product Name:</label>
                        <input type="text" class="form-control" id="editProductName" name="editProductName" placeholder="Enter product name">
                    </div>
                    <div class="form-group">
                        <label for="editProductPrice">Price:</label>
                        <input type="number" class="form-control" id="editProductPrice" name="editProductPrice" placeholder="Enter price" min="0" step="0.01">
                    </div>
                    <div class="form-group">
                        <label for="editProductQuantity">Quantity:</label>
                        <input type="number" class="form-control" id="editProductQuantity" name="editProductQuantity" placeholder="Enter quantity" min="1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="deleteForm" action="{{ route('product-action') }}" method="post">
                @csrf
    <input type="hidden" name="action" value="delete">
    <input type="hidden" id="deleteProductId" name="product_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this product?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
          </div>
          <!-- container-fluid -->
        </div>
        <script>
    //Sale Product
    const sellButtons = document.querySelectorAll('.sellBtn');
    const productIdInput = document.getElementById('productId');
    const productNameInput = document.getElementById('productName');
    const productPriceInput = document.getElementById('productPrice');

    sellButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const productId = btn.getAttribute('data-product-id');
            const productName = btn.getAttribute('data-product-name');
            const productPrice = btn.getAttribute('data-product-price');

            productIdInput.value = productId;
            productNameInput.value = productName;
            productPriceInput.value = productPrice;
        });
    });
    //End sale product
    // Edit Products
    const editButtons = document.querySelectorAll('.editBtn');
    const editProductIdInput = document.getElementById('editProductId');
    const editProductNameInput = document.getElementById('editProductName');
    const editProductPriceInput = document.getElementById('editProductPrice');
    const editProductQuantityInput = document.getElementById('editProductQuantity');

    editButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const productId = btn.getAttribute('data-product-id');
            editProductIdInput.value = productId;

            // Fetch product details based on productId and populate the form fields
            fetch(`/get-product-details/${productId}`)
                .then(response => response.json())
                .then(data => {
                    editProductNameInput.value = data.name;
                    editProductPriceInput.value = data.price;
                    editProductQuantityInput.value = data.quantity;
                })
                .catch(error => console.error('Error:', error));
        });
    });
    //End Edit Product
    //Delete Product
    const deleteButtons = document.querySelectorAll('.deleteBtn');
    const deleteProductId = document.getElementById('deleteProductId');
    deleteButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const productId = btn.getAttribute('data-product-id');
            
            // Set the product ID in the delete form
            deleteProductId.value = productId;

            // Submit the delete form
            deleteProductBtn.click();
        });
    });
</script>
@endsection
