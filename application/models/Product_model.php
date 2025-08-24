<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    private $table = 'products';

    public function __construct() {
        parent::__construct();
    }

    public function create($data) {
        // Convert features array to comma-separated string if needed
        if (isset($data['features']) && is_array($data['features'])) {
            $data['features'] = implode(',', $data['features']);
        }
        
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function getAll($filter = []) {
        if (!empty($filter)) {
            $this->db->where($filter);
        }
        $query = $this->db->get($this->table);
        $results = $query->result_array();
        
        // Convert features string back to array for compatibility
        foreach ($results as &$result) {
            if (!empty($result['features'])) {
                $result['features'] = explode(',', $result['features']);
            } else {
                $result['features'] = [];
            }
        }
        
        return $results;
    }

    public function getById($id) {
        $query = $this->db->get_where($this->table, ['id' => $id]);
        $result = $query->row_array();
        
        if ($result && !empty($result['features'])) {
            $result['features'] = explode(',', $result['features']);
        } else if ($result) {
            $result['features'] = [];
        }
        
        return $result;
    }

    public function update($id, $data) {
        // Convert features array to comma-separated string if needed
        if (isset($data['features']) && is_array($data['features'])) {
            $data['features'] = implode(',', $data['features']);
        }
        
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}
