<?php
// Minimal product form used by CodeIgniter route admin/product_form
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $product ? 'Edit' : 'Add' ?> Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow p-4 mx-auto" style="max-width: 700px;">
        <h3 class="mb-3 text-center"><?= $product ? 'Edit' : 'Add' ?> Product</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Product Image</label>
                <input type="file" class="form-control" name="image" accept="image/*">
                <?php if (!empty($product['image'])): ?>
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="Product Image" class="img-thumbnail mt-2" style="max-width: 150px;">
                <?php endif; ?>
            </div>
            <?php if ($product): ?>
                <input type="hidden" name="id" value="<?= htmlspecialchars(isset($product['id']) ? $product['id'] : (isset($product['_id']) ? $product['_id'] : '')) ?>">
            <?php endif; ?>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($product['name'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" class="form-control" name="category" value="<?= htmlspecialchars($product['category'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" value="<?= htmlspecialchars($product['price'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" required><?= htmlspecialchars($product['description'] ?? '') ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Features (comma separated)</label>
                <input type="text" class="form-control" name="features" value="<?= isset($product['features']) ? htmlspecialchars($product['features']) : '' ?>">
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured" <?= !empty($product['is_featured']) ? 'checked' : '' ?>>
                <label class="form-check-label" for="is_featured">Featured</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Save</button>
        </form>
    </div>
</div>
</body>
</html>