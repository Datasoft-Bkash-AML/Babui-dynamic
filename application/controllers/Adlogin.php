<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adlogin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('aduser_model'); // Load the model
		$this->load->library('session');
		$this->load->database();
		$this->load->library('form_validation');
	}

//	public function index() {
//		// Use the model
//		$result = $this->aduser_model->some_method();
//		echo $result;
//	}
	public function authenticate() {

		echo "kkk";

//		$username = $this->input->post('username');
//		$password = $this->input->post('password');
//		// Fetch user data from the database
//		$user = $this->aduser_model->get_user_by_username($username);


		// Set validation rules for form input
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
//
		if ($this->form_validation->run() == FALSE) {
			// Reload login view if validation fails
			$this->load->view('admin-view/log-in');
		} else {
//			// Get username and password from the POST request
			$username = $this->input->post('username');
			$password = $this->input->post('password');
//			// Fetch user data from the database
			$user = $this->aduser_model->get_user_by_username($username,$password);
			if ($user) {
				echo $user->id."---------------------test";
				echo $user->username."---------------------test";
			}
else{
	echo "hello";
}
//			if ($user && password_verify($password, $user['password'])) {
//				// Set session data on successful login
//				$session_data = [
//					'user_id' => $user['id'],
//					'username' => $user['username'],
//					'logged_in' => TRUE
//				];
//				$this->session->set_userdata($session_data);
//
//				// Redirect to the dashboard or any protected page
//				redirect('welcome');
//			} else {
//				// Set an error message and reload the login view
//
//
//				$this->session->set_flashdata('error', '----Invalid username or password');
//				redirect('adlogin/index');
//			}
		}
	}

	public function index()
	{

		$this->load->view('admin-view/log-in');
	}

}
