<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($product) && $product ? 'Edit' : 'Add' ?> Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow p-4 mx-auto" style="max-width: 500px;">
        <h3 class="mb-3 text-center"><?= isset($product) && $product ? 'Edit' : 'Add' ?> Product</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Product Image</label>
                <input type="file" class="form-control" name="image" accept="image/*">
                <?php if (isset($product) && !empty($product['image'])): ?>
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="Product Image" class="img-thumbnail mt-2" style="max-width: 150px;">
                    <input type="hidden" name="existing_image" value="<?= htmlspecialchars($product['image']) ?>">
                <?php endif; ?>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?= isset($product) ? htmlspecialchars($product['name']) : '' ?>" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Category</label>
                <select class="form-select" name="category" required>
                    <option value="">Select Category</option>
                    <option value="headphone" <?= (isset($product) && $product['category'] === 'headphone') ? 'selected' : '' ?>>Headphone</option>
                    <option value="watch" <?= (isset($product) && $product['category'] === 'watch') ? 'selected' : '' ?>>Watch</option>
                    <option value="speaker" <?= (isset($product) && $product['category'] === 'speaker') ? 'selected' : '' ?>>Speaker</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" value="<?= isset($product) ? htmlspecialchars($product['price']) : '' ?>" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" required><?= isset($product) ? htmlspecialchars($product['description']) : '' ?></textarea>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Features (comma separated)</label>
                <input type="text" class="form-control" name="features" value="<?= isset($product) && is_array($product['features']) ? implode(',', $product['features']) : (isset($product) ? $product['features'] : '') ?>">
            </div>
            
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured" <?= (isset($product) && !empty($product['is_featured'])) ? 'checked' : '' ?>>
                <label class="form-check-label" for="is_featured">Featured</label>
            </div>
            
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary flex-fill">Save</button>
                <a href="<?= base_url('admin') ?>" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>