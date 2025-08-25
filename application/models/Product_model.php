<?php
// application/models/Product_model.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function create($data) {
        $this->db->insert('products', $data);
        return $this->db->insert_id();
    }

    public function getAll($filter = []) {
        if (!empty($filter)) {
            $this->db->where($filter);
        }
        $query = $this->db->get('products');
        return $query->result_array();
    }

    public function getById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('products');
        return $query->row_array();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('products', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('products');
    }
}
