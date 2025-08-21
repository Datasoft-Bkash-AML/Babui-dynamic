<!DOCTYPE html>
<html>
<head>
    <title>Manage Featured Products</title>
</head>
<body>
    <h1>Featured Products</h1>
    <ul>
        <?php foreach ($featured as $item): ?>
            <li>
                Product ID: <?php echo $item['product_id']; ?>
                <a href="<?php echo site_url('admin_featured/remove/'.$item['product_id']); ?>">Remove</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <form method="post" action="<?php echo site_url('admin_featured/add'); ?>">
        <label>Add Product ID to Feature:</label>
        <input type="number" name="product_id" required>
        <button type="submit">Add</button>
    </form>
</body>
</html>
