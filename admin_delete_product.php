<?php
// admin_delete_product.php
require_once __DIR__ . '/application/controllers/Admin.php';

session_start();
$admin = new Admin();
if (!$admin->isAuthenticated()) {
    header('Location: /admin/login');
    exit;
}
if (isset($_GET['id'])) {
    $admin->deleteProduct($_GET['id']);
}
header('Location: /admin_dashboard.php');
exit;
