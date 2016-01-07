<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sender_Model extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

    public function insertSender($data){
    	$this->db->insert('sender', $data);
    	return $this->db->insert_id();
    }
}