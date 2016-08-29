<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    public function index() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $fila = $this->user_model->getUser($email);
        
        if ($fila != NULL) {
            if ($fila->password == $password) {
                $data = array(
                    'email' => $email,
                    'id' => $fila->id,
                    'login' => TRUE
                );
                $this->session->set_userdata($data);
            }
            else {
                redirect(base_url());
            }
        }
        else {
            redirect(base_url());
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
