<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_Model extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

    public function getCategory(){
    	return $this->db->get('category')->result();
    }
}