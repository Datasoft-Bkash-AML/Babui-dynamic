<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <form class="d-flex" action="<?= base_url('admin/logout') ?>" method="post">
            <button class="btn btn-outline-light" type="submit">Logout</button>
        </form>
    </div>
</nav>
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Products</h2>
        <a href="<?= base_url('admin/product_form') ?>" class="btn btn-success">Add Product</a>
    </div>
    <table class="table table-bordered bg-white shadow-sm">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Featured</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td>
                        <?php if (!empty($product['image'])): ?>
                            <img src="<?= htmlspecialchars($product['image']) ?>" alt="Product Image" style="max-width:60px;max-height:60px;object-fit:contain;">
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= htmlspecialchars($product['category']) ?></td>
                    <td>$<?= htmlspecialchars($product['price']) ?></td>
                    <td><?= !empty($product['is_featured']) ? 'Yes' : 'No' ?></td>
                    <td>
                        <a href="<?= base_url('admin/product_form/' . $product['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="<?= base_url('admin/delete_product/' . $product['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this product?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" class="text-center">No products found.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>