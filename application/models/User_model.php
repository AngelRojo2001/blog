<?php

class User_model extends CI_Model {
    public function getUser($email) {
        $this->db->where('email', $email);
        $this->db->limit(1);
        $query = $this->db->get('user');
        return $query->row();
    }
}
