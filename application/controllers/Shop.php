<?php


require_once __DIR__ . '/../models/Product_model.php';

class Shop extends CI_Controller {
	public function index()
	{
		$productModel = new Product_model();
		$products = $productModel->getAll();
		$this->load->view('client-view/shop', ['products' => $products]);
	}

	public function category($category)
	{
		$productModel = new Product_model();
		$products = $productModel->getAll(['category' => $category]);
		$this->load->view('client-view/shop', ['products' => $products, 'category' => $category]);
	}

	public function featured()
	{
		$productModel = new Product_model();
		$products = $productModel->getAll(['is_featured' => true]);
		$this->load->view('client-view/shop', ['products' => $products, 'featured' => true]);
	}
}
