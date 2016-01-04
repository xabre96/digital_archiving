<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Digital_Model extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

    public function login($data){
    	$pass = hash('sha512', $data['password']);
    	return $this->db->get_where('user_account', array('user_name'=>$data['username'], 'password'=> $pass))->result();
    }
}