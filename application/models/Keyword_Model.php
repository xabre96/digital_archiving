<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Keyword_Model extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

    public function insertKeyword($data){
    	$this->db->insert('keywords', $data);
    	return $this->db->insert_id();
    }
}