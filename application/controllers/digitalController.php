<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class digitalController extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Digital_Model', 'digital');
        $this->load->model('Category_Model', 'category');
        $this->load->model('Document_Model', 'document');
        $this->load->model('Date_Model', 'date');
        $this->load->model('Keyword_Model', 'keyword');
        $this->load->model('Sender_Model', 'sender');
        $this->load->model('Subject_Model', 'subject');
        $this->load->model('Attach_Model', 'attach');
    }
    
    public function toPDF() {
        // if (file_exists($pdfFilePath) == FALSE) {
        //     ini_set('memory_limit', '32M');
        //      // boost the memory limit if it's low <img class="emoji" draggable="false" alt="😉" src="https://s.w.org/images/core/emoji/72x72/1f609.png">
        //     $html = $this->load->view('pdf_report', $data, true);
        //      // render the view into HTML
            
        //     $this->load->library('pdf');
        //     $pdf = $this->pdf->load();
        //     $pdf->SetFooter($_SERVER['HTTP_HOST'] . '|{PAGENO}|' . date(DATE_RFC822));
        //      // Add a footer for good measure <img class="emoji" draggable="false" alt="😉" src="https://s.w.org/images/core/emoji/72x72/1f609.png">
        //     $pdf->WriteHTML($html);
        //      // write the HTML into the PDF
        //     $pdf->Output($pdfFilePath, 'F');
        //      // save to file because we can
            
        // }
        
        // redirect("/downloads/reports/$filename.pdf");
        echo "hello";
    }
    
    public function index() {
        if ($this->session->userdata('logged_in') != FALSE) {
            redirect('digitalController/adminDashBoard');
        } 
        else {
            $data = array("document" => $this->document->getDocuments());
            $this->load->view('mainView/index.php', $data);
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
                $data = array("category" => $this->category->getCategory());
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
                
                $date = array('date' => $data['date'], 'document_id' => $maxId);
                $date_id = $this->date->insertDate($date);
                
                $key = array('keyword' => $data['keyword'], 'document_id' => $maxId);
                $key_id = $this->keyword->insertKeyword($key);
                
                $sender = array('sender' => $data['sender'], 'document_id' => $maxId);
                $sender_id = $this->sender->insertSender($sender);
                
                $subject = array('subject' => $data['subject'], 'document_id' => $maxId);
                $subject_id = $this->subject->insertSubject($subject);
                
                if ($_FILES["fileUpload"]["type"][0] == null) {
                    echo 'no files';
                } 
                else {
                    mkdir("documents/" . $data['category'] . "/" . $maxId);
                    $target_dir = "documents/" . $data['category'] . "/" . $maxId . "/";
                    for ($i = 0; $i < count($_FILES["fileUpload"]["name"]); $i++) {
                        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"][$i]);
                        $uploadOk = 1;
                        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                        if (isset($_POST["submit"])) {
                            $check = getimagesize($_FILES["fileUpload"]["tmp_name"][$i]);
                            if ($check !== false) {
                                echo "File is an image - " . $check["mime"] . ".";
                                $uploadOk = 1;
                            } 
                            else {
                                echo "File is not an image.";
                                $uploadOk = 0;
                            }
                        }
                        if (file_exists($target_file)) {
                            echo "Sorry, file already exists.";
                            $uploadOk = 0;
                        }
                        if ($_FILES["fileUpload"]["size"][$i] > 2000000) {
                            echo "Sorry, your file is too large.";
                            $uploadOk = 0;
                        }
                        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                            echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
                            $uploadOk = 0;
                        }
                        
                        if ($uploadOk == 0) {
                            echo "Sorry, your file was not uploaded.";
                        } 
                        else {
                            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"][$i], $target_file)) {
                                echo "The file " . basename($_FILES["fileUpload"]["name"][$i]) . " has been uploaded.";
                                $attach = array('attach_id' => $data['subject'], 'filename' => $_FILES["fileUpload"]["name"][$i], 'document_id' => $maxId);
                                $attach_id = $this->attach->insertAttach($attach);
                            } 
                            else {
                                echo "Sorry, there was an error uploading your file.";
                            }
                        }
                    }
                    
                    $ids = array('date_id' => $date_id, 'keyword_id' => $key_id, 'category_id' => $data['category'], 'sender_id' => $sender_id, 'subject_id' => $subject_id, 'document_id' => $maxId);
                    $this->document->insertDocument($ids);
                    redirect('digitalController/adminDashBoard');
                }
            }
        }
    }
    
    public function deleteDocument($category_id, $document_id) {
        if ($this->session->userdata('logged_in') == FALSE) {
            redirect('digitalController/index');
        } 
        else {
            $this->document->deleteDocument($document_id);
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
            redirect('digitalController/adminDashBoard');
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
