<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aduser_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function some_method() {
		return "Hello from the Aduser model!";
	}

	public function get_user_by_username($username,$password)
	{

		// Fetch user data by username from the database
//		$this->db->where('username', $username);
//		$query = $this->db->get('users'); // 'users' is the table name
//		echo $query;

//		$query = $this->db->query("SELECT * FROM users");
//		$data = $query->row(); // Fetch as an array of objects
		$query = $this->db->query('select * from users where username = "'.$username.'" and password = "'.$password.'"');
		$row = $query->row(); // Get as an object
//		echo $row->username;
//		$this->db->where('username', $username);
//		$this->db->where('username', $password);
//		$query = $this->db->get('users');
//		$data = $query->row();
//// To display the data
//		foreach ($data as $row) {
//			echo $row->created_at; // Replace 'username' with your column name
//		}
//		print_r($query);
//		echo $row->id."666666666666666666666";
		return $row;
	}
}

//================================ sample sql=========================
//$query = $this->db->query("SELECT * FROM users");
//
//// Using result() (array of objects)
//foreach ($query->result() as $row) {
//	echo $row->username; // Replace 'username' with your column name
//}
//
//// Using result_array() (array of associative arrays)
//foreach ($query->result_array() as $row) {
//	echo $row['username'];
//}
//================================ sample sql=========================

//$query = $this->db->query("SELECT * FROM users WHERE id = 1");
//
//// Using row() (as an object)
//$row = $query->row();
//echo $row->username; // Replace 'username' with your column name
//
//// Using row_array() (as an associative array)
//$row = $query->row_array();
//echo $row['username'];

//================================ sample sql=========================
//$query = $this->db->query("SELECT COUNT(*) as total FROM users");
//$row = $query->row();
//echo $row->total; // Outputs the total count
//================================ sample sql=========================
// Fetch all rows
//$query = $this->db->get('users');
//$data = $query->result_array(); // Get as an array of arrays
//foreach ($data as $row) {
//	echo $row['username'];
//}
//
//// Fetch a single row
//$this->db->where('id', 1);
//$query = $this->db->get('users');
//$row = $query->row(); // Get as an object
//echo $row->username;
//================================ sample sql=========================
//$query = $this->db->query("SELECT * FROM users");
//print_r($query->result()); // Debug result object

