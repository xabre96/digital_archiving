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
	  
  }
  
  public function viewDocument($category_id, $document_id)
  {
	$c = false;
    $name = $this->attach->getAttach($document_id);
	if($name == null){
		$this->session->set_flashdata('message', '
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="glyphicon glyphicon-remove"></i>
                File does not exist!
            </div>   
        ');
        redirect('digitalController/adminDashBoard');
	}
	else{
		foreach ($name as $key => $value) {
			if (!file_exists('documents/'.$category_id.'/'.$document_id)){
				$this->session->set_flashdata('message', '
					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<i class="glyphicon glyphicon-remove"></i>
						File does not exist!
					</div>   
				');
				redirect('digitalController/adminDashBoard');
				break;
			}
			else{
				$this->pdf->AddPage("P");
				$this->pdf->centreImage('documents/'.$category_id.'/'.$document_id.'/'.$value->filename);
				$this->pdf->ln(20);
				$c = true;
			}
		}
		if($c==true){
			$file = ''.$document_id.'.pdf';
			$this->pdf->Output($file, 'I');
		}
	}
  }
  
 /** public function viewDocument($category_id, $document_id)
  {
    $name = $this->attach->getAttach($document_id);
    
    foreach ($name as $key => $value) {
      $this->pdf->AddPage("P");
      $this->pdf->centreImage('documents/'.$category_id.'/'.$document_id.'/'.$value->filename);
      // $this->pdf->Image('documents/'.$category_id.'/'.$document_id.'/'.$value->filename);
      $this->pdf->ln(20);
    }
    $file = ''.$document_id.'.pdf';
    $this->pdf->Output($file, 'I');
	//$this->pdf->Output($file, 'D');
  } **/
  
}