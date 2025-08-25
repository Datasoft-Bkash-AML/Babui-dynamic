<?php
// admin_login.php
require_once __DIR__ . '/application/controllers/Admin.php';

// Redirect to the proper route
header('Location: /admin/login');
exit;

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $admin = new Admin();
    if ($admin->login($username, $password)) {
        header('Location: /admin_dashboard.php');
        exit;
    } else {
        $error = 'Invalid credentials';
    }
}
include __DIR__ . '/application/views/admin-view/login.php';
