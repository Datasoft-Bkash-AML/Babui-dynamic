<?php
// application/models/Product_model.php


class Product_model extends CI_Model {
    private $table = 'products';

    public function __construct() {
        parent::__construct();
    }

    public function create($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function getAll($filter = []) {
        if (!empty($filter)) {
            $this->db->where($filter);
        }
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function getById($id) {
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return $query->row_array();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}
