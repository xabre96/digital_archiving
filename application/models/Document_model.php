<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Document_Model extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

    public function getMaxDocumentId(){
    	return $this->db->query("SELECT max(document_id) as id from document")->result();
    }

    public function insertDocument($data){
    	return $this->db->insert('document', $data);
    }

    public function getDocuments(){
    	return $this->db->query("SELECT a.document_id, a.category_id, b.subject, c.sender, d.keyword, e.date FROM document as a, subject as b, sender as c, keywords as d, date as e WHERE a.document_id = b.document_id AND a.document_id = c.document_id AND a.document_id = d.document_id and a.document_id = e.document_id")->result();
    }

    public function deleteDocument($id){
        $this->db->delete('attach', array('document_id' => $id));
        $this->db->delete('date', array('document_id' => $id));
        $this->db->delete('keywords', array('document_id' => $id));
        $this->db->delete('sender', array('document_id' => $id));
        $this->db->delete('subject', array('document_id' => $id));
        return $this->db->delete('document', array('document_id' => $id));
    }
}