<?php
// application/controllers/Admin.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public $productModel; // Change from private to public

    public function __construct() {
        parent::__construct();
        session_start();
        $this->load->model('Product_model', 'productModel');
        $this->checkAuthentication(); // Centralize authentication
    }

    private function checkAuthentication() {
        $excludedMethods = ['showLogin']; // Methods that do not require authentication
        $currentMethod = $this->router->fetch_method();

        if (!in_array($currentMethod, $excludedMethods) && !$this->isAuthenticated()) {
            redirect('admin/login');
        }
    }

    public function login($username, $password) {
        log_message('info', 'Admin login attempt.');
        // For demo: hardcoded admin, replace with DB lookup and hash in production
        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['admin_logged_in'] = true;
            log_message('info', 'Admin logged in successfully.');
            log_message('debug', 'Session admin_logged_in set to true.');
            return true;
        }
        log_message('error', 'Admin login failed. Invalid credentials.');
        return false;
    }

    public function logout() {
        log_message('info', 'Admin logged out.');
        session_destroy();
    }

    public function isAuthenticated() {
        $isAuthenticated = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'];
        log_message('debug', 'isAuthenticated check: ' . ($isAuthenticated ? 'true' : 'false'));
        return $isAuthenticated;
    }

    public function createProduct($data) {
        if (!$this->isAuthenticated()) {
            log_message('error', 'Unauthorized product creation attempt.');
            return false;
        }
        log_message('info', 'Product creation initiated.');
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
        if (!$this->isAuthenticated()) {
            log_message('error', 'Unauthorized product deletion attempt.');
            return false;
        }
        log_message('info', "Product deletion initiated for ID: $id.");
        $this->productModel->delete($id);
        return true;
    }

    public function showLogin() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($this->login($username, $password)) {
                log_message('debug', 'Redirecting to admin/dashboard after successful login.');
                redirect('admin/dashboard'); // Redirect to dashboard after successful login
            } else {
                $data['error'] = 'Invalid credentials';
                $this->load->view('admin-view/login', $data);
            }
        } else {
            $this->load->view('admin-view/login');
        }
    }

    public function dashboard() {
        // log_message('debug', 'Session admin_logged_in in dashboard: ' . (isset($_SESSION['admin_logged_in']) ? $_SESSION['admin_logged_in'] : 'not set'));
        // if (!$this->isAuthenticated()) {
        //     redirect('admin/login');
        // }
        $data['products'] = $this->getProducts();
        $this->load->view('admin-view/dashboard', $data);
    }

    public function testAuth() {
        $isAuthenticated = $this->isAuthenticated();
        echo $isAuthenticated ? 'Authenticated' : 'Not Authenticated';
    }

    // Show product form or handle create/update
    public function product_form() {
        // If accessed directly (non-CI root scripts), handle both GET and POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // handle create or update
            $id = $this->input->post('id');
            $imagePath = null;
            // simple upload handling
            if (!empty($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
                $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $filename = uniqid('prod_', true) . '.' . $ext;
                $targetDir = FCPATH . 'assets/products/';
                if (!is_dir($targetDir)) mkdir($targetDir, 0755, true);
                $target = $targetDir . $filename;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    $imagePath = '/assets/products/' . $filename;
                }
            }

            $data = [
                'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'price' => (float)$this->input->post('price'),
                'description' => $this->input->post('description'),
                'features' => $this->input->post('features'),
                'is_featured' => !empty($this->input->post('is_featured')) ? 1 : 0
            ];
            if ($imagePath) $data['image'] = $imagePath;

            if (!empty($id)) {
                $this->updateProduct($id, $data);
            } else {
                $this->createProduct($data);
            }
            redirect('admin/dashboard');
            return;
        }

        // GET: show form
        $product = null;
        $id = $this->input->get('id');
        if (!empty($id)) {
            $products = $this->getProducts(['id' => $id]);
            $product = !empty($products) ? $products[0] : null;
        }
        $this->load->view('admin-view/product_form', ['product' => $product]);
    }

    // Delete product via controller route
    public function delete_product() {
        $id = $this->input->get('id');
        if (!empty($id)) {
            $this->deleteProduct($id);
        }
        redirect('admin/dashboard');
    }
}
