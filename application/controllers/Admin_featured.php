<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_featured extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Featured_products_model');
        // Add authentication check here for admin
    }

    public function index() {
        $data['featured'] = $this->Featured_products_model->get_all();
        $this->load->view('admin-view/featured_products', $data);
    }

    public function add() {
        $product_id = $this->input->post('product_id');
        $this->Featured_products_model->add($product_id);
        redirect('admin_featured');
    }

    public function remove($product_id) {
        $this->Featured_products_model->remove($product_id);
        redirect('admin_featured');
    }
}
