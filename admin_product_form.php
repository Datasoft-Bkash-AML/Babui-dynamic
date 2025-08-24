<?php
// Redirect to CodeIgniter admin product form
$id = isset($_GET['id']) ? $_GET['id'] : '';
$redirect_url = '/index.php/admin/product_form' . ($id ? '/' . $id : '');
header('Location: ' . $redirect_url);
exit;
