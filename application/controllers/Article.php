<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('post_model');
    }
    
    public function post($id = '') {
        $fila = $this->post_model->getPostByName($id);
        $data['titulo'] = $fila->post;
        $data['app'] = 'Blog';
        $data['post'] = $fila->post;
        $data['descripcion'] = $fila->descripcion;
        $data['contenido'] = $fila->contenido;
        
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/nav', $data);
        $this->load->view('post', $data);
        $this->load->view('layouts/footer');
    }
    
    public function nuevo() {
        $data['titulo'] = 'Crear nuevo post';
        $data['app'] = 'Perfil';
        $data['post'] = 'Nuevo post';
        $data['descripcion'] = 'Creando un nuevo post';
        
        
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/nav', $data);
        $this->load->view('user/nuevo');
        $this->load->view('layouts/footer');
    }
}
