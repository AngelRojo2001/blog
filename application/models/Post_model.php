<?php

class Post_model extends CI_Model {
    public function getPost() {
        return $this->db->get('post');
    }
    
    public function getPostByName($id) {
        $this->db->from('post');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
}
