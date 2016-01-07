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

    public function getAttach($id){
    	return $this->db->get_where('attach', array('document_id' => $id))->result();
    }
}