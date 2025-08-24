<?php
// Redirect to CodeIgniter admin delete
$id = isset($_GET['id']) ? $_GET['id'] : '';
$redirect_url = '/index.php/admin/delete_product' . ($id ? '/' . $id : '');
header('Location: ' . $redirect_url);
exit;
