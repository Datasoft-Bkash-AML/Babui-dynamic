<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
    }

    public function index()
    {
        $data['products'] = $this->Product_model->getAll();
        $this->load->view('client-view/shop', $data);
    }

    public function category($category)
    {
        $data['products'] = $this->Product_model->getAll(['category' => $category]);
        $data['category'] = $category;
        $this->load->view('client-view/shop', $data);
    }

    public function featured()
    {
        $data['products'] = $this->Product_model->getAll(['is_featured' => 1]);
        $data['featured'] = true;
        $this->load->view('client-view/shop', $data);
    }
}
