<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class digitalController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Digital_Model', 'digitalModel' );
        
      
    }

    public function index() {
     
            $this->load->view('mainView/index.php');
        
    }

    public function login(){

    	 	$this->load->view('mainView/login.php');
    }

    public function adminDashBoard (){
    	    $this->load->view('adminView/admin-dashboard.php');
    }

    public function viewDocument (){
            $this->load->view('mainView/viewdocument.php');
    }

}
