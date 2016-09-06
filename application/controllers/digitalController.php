<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class digitalController extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->pdf->fontpath = 'font/';
        $this->load->model('Digital_Model', 'digital');
        $this->load->model('Category_Model', 'category');
        $this->load->model('Document_Model', 'document');
        $this->load->model('Date_Model', 'date');
        $this->load->model('Keyword_Model', 'keyword');
        $this->load->model('Sender_Model', 'sender');
        $this->load->model('Subject_Model', 'subject');
        $this->load->model('Attach_Model', 'attach');
    }
    
    public function index() {
        if ($this->session->userdata('logged_in') != FALSE) {
            redirect('digitalController/adminDashBoard');
        } 
        else {
            $date = date("Y-m-d");
            if($date >= '2017-04-20'){
                echo 'Error 909. Please contact the administrator.';
            }else{
                $data = array("document" => $this->document->getDocuments());
                $this->load->view('mainView/index.php', $data);
            }
        }
    }
    
    public function login() {
        if ($this->session->userdata('logged_in') != FALSE) {
            redirect('digitalController/adminDashBoard');
        } 
        else {
            $this->load->view('mainView/login.php');
        }
    }
    
    public function loginUser() {
        
        if ($this->form_validation->run() == FALSE) {
            $data = array("document" => $this->document->getDocuments());
            $this->load->view('mainView/index.php', $data);
        } 
        else {
            $data = $this->input->post();
            $confirm = $this->digital->login($data);
            if (!$confirm) {
                $message = 'Invalid User Name and Password';
                $this->load->view('mainView/index.php', array('message' => $message));
            } 
            else {
                foreach ($confirm as $key => $value) {
                    $credentials = array('user_id' => $value->user_id, 'user_name' => $value->user_name, 'user_pass' => $value->password, 'logged_in' => TRUE, 'user_type' => $value->user_type_id);
                    $this->session->set_userdata($credentials);
                }
                redirect('digitalController/adminDashBoard');
            }
        }
    }
    
    public function uploadDocument() {
        if ($this->session->userdata('logged_in') == FALSE) {
            redirect('digitalController/index');
        } 
        else {
            $data = $this->input->post();
            if ($this->form_validation->run() == FALSE) {
                $data = array("category" => $this->category->getCategory(), "document" => $this->document->getDocuments());
                $this->load->view('adminView/admin-dashboard.php', $data);
            } 
            else {
                
                /*****************PLEASE DO NOT ERASE*******************/
                
                /////////////////////////////////////////////////////////
                // $filename = "documents/".$data['category']."/".$maxId;
                
                // if (file_exists($filename)) {
                //     echo "The file $filename exists";
                // } else {
                //     echo "The file $filename does not exist";
                // }
                ////////////////////////////////////////////////////////
                $id = $this->document->getMaxDocumentId();
                foreach ($id as $key => $value) {
                    $maxId = $value->id + 1;
                }
                if ($maxId == null) {
                    $maxId = 1;
                }
                
                if ($_FILES["fileUpload"]["type"][0] == null) {
                    
                    redirect('digitalController/adminDashBoard');
                } 
                else {
                    $message = "";
                    $target_dir = "documents/" . $data['category'] . "/" . $maxId . "/";
                    for ($i = 0; $i < count($_FILES["fileUpload"]["name"]); $i++) {
                        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"][$i]);
                        $uploadOk = 1;
                        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                        if (isset($_POST["submit"])) {
                            $check = getimagesize($_FILES["fileUpload"]["tmp_name"][$i]);
                            if ($check !== false) {
                                //echo "File is an image - " . $check["mime"] . ".";
                                $uploadOk = 1;
                            } 
                            else {
                                $message = "File is not an image.";
                                $uploadOk = 0;
                            }
                        }
                        if (file_exists($target_file)) {
                            $message = $message . "\nSorry, file already exists.";
                            $uploadOk = 0;
                        }
                        if ($_FILES["fileUpload"]["size"][$i] > 2000000000) {
                            $message = $message . "\nSorry, your file is too large.";
                            $uploadOk = 0;
                        }
                        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPG") {
                            $message = $message . "\nSorry, only JPG, JPEG, & PNG files are allowed.";
                            $uploadOk = 0;
                        }
                        
                        if ($uploadOk == 0) {
                            $message = $message . "\nSorry, your file was not uploaded.";
                     
                        } 
                        else {
							if($i==0){
								mkdir("documents/" . $data['category'] . "/" . $maxId);
							}
							if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"][$i], $target_file)) {
								//echo "The file " . basename($_FILES["fileUpload"]["name"][$i]) . " has been uploaded.";
								$attach = array('attach_id' => $data['subject'], 'filename' => $_FILES["fileUpload"]["name"][$i], 'document_id' => $maxId);
								$attach_id = $this->attach->insertAttach($attach);
							} 
							else {
								//echo "Sorry, there was an error uploading your file.";
							}
                        }
                    }
                    if ($uploadOk == 0) {
                        $data = array("category" => $this->category->getCategory(), "document" => $this->document->getDocuments(), "err_file" => "Please input only valid image files. Make sure image files must be JPEG, PNG, and JPG.");
                        $this->load->view('adminView/admin-dashboard.php', $data);
                    } 
                    else {
                        
                        $date = array('date' => $data['date'], 'document_id' => $maxId);
                        $date_id = $this->date->insertDate($date);
                        
                        $key = array('keyword' => $data['keyword'], 'document_id' => $maxId);
                        $key_id = $this->keyword->insertKeyword($key);
                        
                        $sender = array('sender' => $data['sender'], 'document_id' => $maxId);
                        $sender_id = $this->sender->insertSender($sender);
                        
                        $subject = array('subject' => $data['subject'], 'document_id' => $maxId);
                        $subject_id = $this->subject->insertSubject($subject);
                        
                        $ids = array('date_id' => $date_id, 'keyword_id' => $key_id, 'category_id' => $data['category'], 'sender_id' => $sender_id, 'subject_id' => $subject_id, 'document_id' => $maxId);
                        $confirm = $this->document->insertDocument($ids);
                        if (!$confirm) {
                            $this->session->set_flashdata('message', '
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <i class="glyphicon glyphicon-remove"></i>
                                    Document upload failed.
                                </div>   
                            ');
                            redirect('digitalController/adminDashBoard');
                        } 
                        else {
                            $this->session->set_flashdata('message', '
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <i class="glyphicon glyphicon-ok"></i>
                                    Document successfully uploaded.
                                </div>   
                            ');
                            redirect('digitalController/adminDashBoard');
                        }
                    }
                }
            }
        }
    }
    
    public function deleteDocument($category_id, $document_id) {
        if ($this->session->userdata('logged_in') == FALSE) {
            redirect('digitalController/index');
        } 
        else {
            $confirm = $this->document->deleteDocument($document_id);
            function deleteDirectory($dir) {
                if (!file_exists($dir)) {
                    return true;
                }
                if (!is_dir($dir)) {
                    return unlink($dir);
                }
                foreach (scandir($dir) as $item) {
                    if ($item == '.' || $item == '..') {
                        continue;
                    }
                    if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
                        return false;
                    }
                }
                return rmdir($dir);
            }
            $dir = "documents/" . $category_id . "/" . $document_id;
            deleteDirectory($dir);
            if (!$confirm) {
                $this->session->set_flashdata('message', '
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <i class="glyphicon glyphicon-remove"></i>
                                    Document deletion failed.
                                </div>   
                            ');
                redirect('digitalController/adminDashBoard');
            } 
            else {
                $this->session->set_flashdata('message', '
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <i class="glyphicon glyphicon-ok"></i>
                                    Document successfully deleted.
                                </div>   
                            ');
                redirect('digitalController/adminDashBoard');
            }
        }
    }
    
    public function adminDashBoard() {
        if ($this->session->userdata('logged_in') == FALSE) {
            redirect('digitalController/index');
        } 
        else {
            $data = array("category" => $this->category->getCategory(), "document" => $this->document->getDocuments());
            $this->load->view('adminView/admin-dashboard.php', $data);
        }
    }
    
    public function viewDocument($category_id, $document_id) {
        $name = $this->attach->getAttach($document_id);
        $data = array('category_id' => $category_id, 'document_id' => $document_id, 'fileName' => $name);
        if ($this->session->userdata('user_type') != NULL) {
            $this->load->view('adminView/viewdocument.php', $data);
        } 
        else {
            $this->load->view('mainView/viewdocument.php', $data);
        }
    }
    
    public function logoutUser() {
        $this->session->unset_userdata();
        $this->session->sess_destroy();
        redirect('digitalController/index');
    }
}