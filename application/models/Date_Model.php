<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Date_Model extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

    public function insertDate($data){
    	$this->db->insert('date', $data);
    	return $this->db->insert_id();
    }
}