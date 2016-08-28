<?php

class Article extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('post_model');
    }
    
    public function post($id = '') {
        $fila = $this->post_model->getPostByName($id);
        echo $fila->post;
    }
}
