<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class digitalController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Digital_Model', 'digital' );
    }

    public function index() {
        if($this->session->userdata('logged_in')!=FALSE){
            redirect('digitalController/adminDashBoard');
        }else{
            $this->load->view('mainView/index.php');
        }
    }

    public function login(){
    	 	$this->load->view('mainView/login.php');
    }

    public function loginUser(){
        $data = $this->input->post();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('mainView/login.php');
        }else{
            $confirm = $this->digital->login($data);
            if(!$confirm){
                $message = 'Invalid User Name and Password';
                $this->load->view('mainView/login.php', array('message' => $message));
            }else{
                foreach ($confirm as $key => $value) {
                    $credentials = array(
                        'user_id' => $value->user_id,
                        'user_name' => $value->user_name,
                        'user_pass' => $value->password,
                        'logged_in' => TRUE,
                        'user_type' => $value->user_type_id
                    );
                    $this->session->set_userdata($credentials);
                }
                redirect('digitalController/adminDashBoard');
            }
        }
    }

    public function adminDashBoard (){
        if($this->session->userdata('logged_in')==FALSE){
            redirect('digitalController/index');
        }else{
            $this->load->view('adminView/admin-dashboard.php');
        }
    }

    public function viewDocument (){
            $this->load->view('mainView/viewdocument.php');
    }

    public function logoutUser(){
         $this->session->unset_userdata();
         $this->session->sess_destroy();
         redirect('digitalController/index');
    }

}
