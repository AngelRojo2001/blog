<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('post_model');
    }
    
    public function index() {
        //$this->session->sess_destroy();
        $data['titulo'] = 'Home';
        $data['app'] = 'Blog';
        $data['post'] = 'Blog';
        $data['descripcion'] = 'Bienvenido a mi página web con CodeIgniter';
        
        $data['consulta'] = $this->post_model->getPost();
        
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/nav', $data);
        $this->load->view('home');
        $this->load->view('layouts/footer');
    }
}