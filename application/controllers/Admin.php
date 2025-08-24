<?php
// application/controllers/Admin.php
require_once __DIR__ . '/../models/Product_model.php';

session_start();

class Admin {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product_model();
    }

    public function login($username, $password) {
        // For demo: hardcoded admin, replace with DB lookup and hash in production
        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['admin_logged_in'] = true;
            return true;
        }
        return false;
    }

    public function logout() {
        session_destroy();
    }

    public function isAuthenticated() {
        return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'];
    }

    public function createProduct($data) {
        if (!$this->isAuthenticated()) return false;
        return $this->productModel->create($data);
    }

    public function getProducts($filter = []) {
        if (!$this->isAuthenticated()) return [];
        return $this->productModel->getAll($filter);
    }

    public function updateProduct($id, $data) {
        if (!$this->isAuthenticated()) return false;
        $this->productModel->update($id, $data);
        return true;
    }

    public function deleteProduct($id) {
        if (!$this->isAuthenticated()) return false;
        $this->productModel->delete($id);
        return true;
    }
}
