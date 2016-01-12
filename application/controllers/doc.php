<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Doc extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->library('pdf');
    $this->pdf->fontpath = 'font/';
    $this->load->model('Attach_Model', 'attach');
  }

  public function index()
  {
    echo 'Hi';
  }
  
  public function viewDocument($category_id, $document_id)
  {
    $name = $this->attach->getAttach($document_id);
    
    foreach ($name as $key => $value) {
      $this->pdf->AddPage("L");
      $this->pdf->centreImage('documents/'.$category_id.'/'.$document_id.'/'.$value->filename);
      $this->pdf->ln(20);
    }
    $file = ''.$document_id.'.pdf';
    $this->pdf->Output($file, 'I');
  }
}