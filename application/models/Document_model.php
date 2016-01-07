<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Document_Model extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

    public function getMaxDocumentId(){
    	return $this->db->query("SELECT max(document_id) as id from document")->result();
    }
}