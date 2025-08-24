<?php
// admin_product_form.php
require_once __DIR__ . '/application/controllers/Admin.php';

session_start();
$admin = new Admin();
if (!$admin->isAuthenticated()) {
    header('Location: /admin_login.php');
    exit;
}

// Edit mode
$product = null;
if (isset($_GET['id'])) {
    $product = $admin->getProducts(['_id' => new MongoDB\BSON\ObjectId($_GET['id'])]);
    $product = $product ? $product[0] : null;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imagePath = $product['image'] ?? '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $filename = uniqid('prod_', true) . '.' . $ext;
        $target = __DIR__ . '/assets/products/' . $filename;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $imagePath = '/assets/products/' . $filename;
        }
    }
    $data = [
        'name' => $_POST['name'],
        'category' => $_POST['category'],
        'price' => (float)$_POST['price'],
        'description' => $_POST['description'],
        'features' => array_map('trim', explode(',', $_POST['features'])),
        'is_featured' => !empty($_POST['is_featured']),
        'image' => $imagePath
    ];
    if (!empty($_POST['id'])) {
        $admin->updateProduct($_POST['id'], $data);
    } else {
        $admin->createProduct($data);
    }
    header('Location: /admin_dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product ? 'Edit' : 'Add' ?> Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow p-4 mx-auto" style="max-width: 500px;">
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
                <input type="hidden" name="id" value="<?= $product['_id'] ?>">
            <?php endif; ?>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($product['name'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <select class="form-select" name="category" required>
                    <option value="headphone" <?= (isset($product['category']) && $product['category'] === 'headphone') ? 'selected' : '' ?>>Headphone</option>
                    <option value="watch" <?= (isset($product['category']) && $product['category'] === 'watch') ? 'selected' : '' ?>>Watch</option>
                    <option value="speaker" <?= (isset($product['category']) && $product['category'] === 'speaker') ? 'selected' : '' ?>>Speaker</option>
                </select>
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
                <input type="text" class="form-control" name="features" value="<?= isset($product['features']) ? implode(',', (array)$product['features']) : '' ?>">
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
