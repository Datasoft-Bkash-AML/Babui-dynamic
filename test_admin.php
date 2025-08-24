<?php
// test_admin.php
require_once __DIR__ . '/application/controllers/Admin.php';

$admin = new Admin();

// Test login
if ($admin->login('admin', 'admin123')) {
    echo "Admin login successful\n";
    // Test product creation
    $id = $admin->createProduct([
        'name' => 'Test Headphone',
        'category' => 'headphone',
        'price' => 99.99,
        'description' => 'A test headphone',
        'features' => ['noise cancelling', 'wireless'],
        'is_featured' => true
    ]);
    echo "Inserted product ID: $id\n";
    // Fetch all products
    $products = $admin->getProducts();
    echo "All products:\n";
    print_r($products);
    // Logout
    $admin->logout();
} else {
    echo "Admin login failed\n";
}
