<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Attach_Model extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

    public function insertAttach($data){
    	$this->db->insert('attach', $data);
    	return $this->db->insert_id();
    }
}