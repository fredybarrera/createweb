<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();      
        session_start();
        if(!isset($_SESSION['username'])){
            redirect('welcome');
        }
    }
    
    public function index(){
        echo 'index';
    }
    
}