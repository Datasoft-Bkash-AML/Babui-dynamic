<?php
// admin_logout.php
require_once __DIR__ . '/application/controllers/Admin.php';

session_start();
$admin = new Admin();
$admin->logout();
header('Location: /admin_login.php');
exit;
