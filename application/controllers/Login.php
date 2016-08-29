<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $data = array(
            'email' => $email,
            'id' => 0,
            'login' => TRUE
        );
        
        $this->session->set_userdata($data);
        
        echo $this->session->email;
        
        var_dump($this->session->has_userdata('email'));
    }
}
