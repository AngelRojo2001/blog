<?php

class Profile extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data['titulo'] = 'Perfil';
        $data['app'] = 'Perfil';
        $data['post'] = 'Bienvenido a tu perfil';
        $data['descripcion'] = 'En esta pagina tu podras manejar tus post y lo que existen';
        
        
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/nav', $data);
        $this->load->view('user/index');
        $this->load->view('layouts/footer');
    }
}
