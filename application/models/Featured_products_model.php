<?php
class Featured_products_model extends CI_Model {
    protected $table = 'featured_products';

    public function get_all() {
        $this->db->select('product_id');
        return $this->db->get($this->table)->result_array();
    }

    public function add($product_id) {
        return $this->db->insert($this->table, [
            'product_id' => $product_id,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function remove($product_id) {
        $this->db->where('product_id', $product_id);
        return $this->db->delete($this->table);
    }
}
