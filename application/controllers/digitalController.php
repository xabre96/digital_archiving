<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class digitalController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Digital_Model', 'digital' );
        $this->load->model('Category_Model', 'category');
        $this->load->model('Document_Model', 'document');
    }

    public function index() {
        if($this->session->userdata('logged_in')!=FALSE){
            redirect('digitalController/adminDashBoard');
        }else{
            $this->load->view('mainView/index.php');
        }
    }

    public function login(){
    	 	$this->load->view('mainView/login.php');
    }

    public function loginUser(){
        $data = $this->input->post();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('mainView/login.php');
        }else{
            $confirm = $this->digital->login($data);
            if(!$confirm){
                $message = 'Invalid User Name and Password';
                $this->load->view('mainView/login.php', array('message' => $message));
            }else{
                foreach ($confirm as $key => $value) {
                    $credentials = array(
                        'user_id' => $value->user_id,
                        'user_name' => $value->user_name,
                        'user_pass' => $value->password,
                        'logged_in' => TRUE,
                        'user_type' => $value->user_type_id
                    );
                    $this->session->set_userdata($credentials);
                }
                redirect('digitalController/adminDashBoard');
            }
        }
    }

    public function uploadDocument(){
        $data = $this->input->post();
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                "category" => $this->category->getCategory()
            );
            $this->load->view('adminView/admin-dashboard.php', $data);
        }else{
            echo 'hi';
            var_dump($data);
            /*****************PLEASE DO NOT ERASE*******************/
            /////////////////////////////////////////////////////////
            // $filename = "documents/".$data['category']."/".$maxId;

            // if (file_exists($filename)) {
            //     echo "The file $filename exists";
            // } else {
            //     echo "The file $filename does not exist";
            // }
            ////////////////////////////////////////////////////////

            // if($_FILES["fileUpload"]["type"][0]==null ){
            //     echo 'no files';
            // } else{
            //     $id = $this->document->getMaxDocumentId();
            //     foreach ($id as $key => $value) {
            //         $maxId = $value->id+1;
            //     }
            //     if($maxId==null){
            //         $maxId = 1;
            //     }
            //     mkdir("documents/".$data['category']."/".$maxId);
            //     $target_dir = "documents/".$data['category']."/".$maxId."/";
            //     for ($i=0; $i < count($_FILES["fileUpload"]["name"]); $i++) {
            //         $target_file = $target_dir . basename($_FILES["fileUpload"]["name"][$i]);
            //         $uploadOk = 1;
            //         $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            //         if(isset($_POST["submit"])) {
            //             $check = getimagesize($_FILES["fileUpload"]["tmp_name"][$i]);
            //             if($check !== false) {
            //                 echo "File is an image - " . $check["mime"] . ".";
            //                 $uploadOk = 1;
            //             } else {
            //                 echo "File is not an image.";
            //                 $uploadOk = 0;
            //             }
            //         }
            //         if (file_exists($target_file)) {
            //             echo "Sorry, file already exists.";
            //             $uploadOk = 0;
            //         }
            //         if ($_FILES["fileUpload"]["size"][$i] > 2000000) {
            //             echo "Sorry, your file is too large.";
            //             $uploadOk = 0;
            //         }
            //         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            //             echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
            //             $uploadOk = 0;
            //         }

            //         if ($uploadOk == 0) {
            //             echo "Sorry, your file was not uploaded.";
            //         } else {
            //             if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"][$i], $target_file)) {
            //                 echo "The file ". basename( $_FILES["fileUpload"]["name"][$i]). " has been uploaded.";
            //             } else {
            //                 echo "Sorry, there was an error uploading your file.";
            //             }
            //         }
            //     }
            // }
        }
    }

    public function adminDashBoard (){
        if($this->session->userdata('logged_in')==FALSE){
            redirect('digitalController/index');
        }else{
            $data = array(
                "category" => $this->category->getCategory()
            );
            $this->load->view('adminView/admin-dashboard.php', $data);
        }
    }

    public function viewDocument (){
            $this->load->view('mainView/viewdocument.php');
    }

    public function logoutUser(){
         $this->session->unset_userdata();
         $this->session->sess_destroy();
         redirect('digitalController/index');
    }

}
