<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_Model extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

    public function insertSubject($data){
    	$this->db->insert('subject', $data);
    	return $this->db->insert_id();
    }
}