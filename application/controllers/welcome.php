<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('inicio');
    }

    public function portafolio() {
        $this->load->view('portafolio');
    }

    public function tecnologia() {
        $this->load->view('tecnologia');
    }

    public function blog() {
        $this->load->view('blog');
    }

    public function contacto() {
        $this->load->view('contacto');
    }

    function login() {
        $this->load->view('login');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Username', 'trim|requider|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        
        if($this->form_validation->run() != FALSE){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            echo $username;
            echo $password;
        }
    }

    function autoprogramable() {
        $this->load->view('autoprogramable');
    }

}