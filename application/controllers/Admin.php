<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index() {
        if (!$this->isAuthenticated()) {
            redirect('admin/login');
        }
        
        $data['products'] = $this->Product_model->getAll();
        $this->load->view('admin-view/dashboard', $data);
    }

    public function login() {
        if ($this->isAuthenticated()) {
            redirect('admin');
        }

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            if ($this->authenticate($username, $password)) {
                $this->session->set_userdata('admin_logged_in', true);
                redirect('admin');
            } else {
                $data['error'] = 'Invalid credentials';
            }
        }
        
        $this->load->view('admin-view/login', isset($data) ? $data : []);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
    }

    public function product_form($id = null) {
        if (!$this->isAuthenticated()) {
            redirect('admin/login');
        }

        $data['product'] = null;
        if ($id) {
            $data['product'] = $this->Product_model->getById($id);
        }

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $productData = $this->processProductForm();
            
            if ($id) {
                $this->Product_model->update($id, $productData);
            } else {
                $this->Product_model->create($productData);
            }
            redirect('admin');
        }

        $this->load->view('admin-view/product_form', $data);
    }

    public function delete_product($id) {
        if (!$this->isAuthenticated()) {
            redirect('admin/login');
        }
        
        $this->Product_model->delete($id);
        redirect('admin');
    }

    private function isAuthenticated() {
        return $this->session->userdata('admin_logged_in') === true;
    }

    private function authenticate($username, $password) {
        // For demo: hardcoded admin, replace with DB lookup and hash verification in production
        return ($username === 'admin' && $password === 'admin123');
    }

    private function processProductForm() {
        $imagePath = '';
        
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $filename = uniqid('prod_', true) . '.' . $ext;
            $target = FCPATH . 'assets/products/' . $filename;
            
            // Create directory if it doesn't exist
            if (!is_dir(dirname($target))) {
                mkdir(dirname($target), 0755, true);
            }
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $imagePath = '/assets/products/' . $filename;
            }
        } else if ($this->input->post('existing_image')) {
            $imagePath = $this->input->post('existing_image');
        }

        return [
            'name' => $this->input->post('name'),
            'category' => $this->input->post('category'),
            'price' => (float)$this->input->post('price'),
            'description' => $this->input->post('description'),
            'features' => $this->input->post('features'),
            'is_featured' => $this->input->post('is_featured') ? 1 : 0,
            'image' => $imagePath
        ];
    }
}
