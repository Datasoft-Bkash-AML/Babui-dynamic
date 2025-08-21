<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Featured_products_model');
		$data['featured_products'] = $this->Featured_products_model->get_all();
		$this->load->view('client-view/index', $data);
	}
}
