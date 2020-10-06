<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {
    private $data;
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Academic_level_model','Subject_model')); 
        $this->load->helper(array('cookie','url'));
        $this->load->library('session');
        $this->load->library('Gateman');

        $this->data = array(
            'username'=>$this->session->userdata('username'),
            'first_name'=>$this->session->userdata('first_name'),
            'last_name'=>$this->session->userdata('last_name'),
            'token'=> $this->session->userdata('token'),
            'user_type'=> $this->session->userdata('user_type'),
            'levels' => $this->Academic_level_model->get_all_academic_levels(),
            'subjects' => $this->Subject_model->get_all_subjects()
        );
    }


    public function index(){
       
        $this->load->view('administrator/learning_resources.php', $this->data);
    }

    public function add(){
       
        $this->load->view('administrator/resource_upload.php', $this->data);
    }

    public function setparams(){

        $this->session->set_userdata(
            array(
                'subject'=>$this->input->post('subject'), 
                'level'=>$this->input->post('level'),
                'description' => $this->input->post('description')
            ));
    }
    
    public function upload(){

        if(!empty($_FILES['file']['name'])){

            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'mp4|pdf|jpg|jpeg|png|gif';
            $config['max_size'] = '20024'; // max_size in kb
            $config['file_name'] = $_FILES['file']['name'];
       
            //Load upload library
            $this->load->library('upload',$config); 
       
            // File upload
            if($this->upload->do_upload('file')){
              // Get data about the file
              $uploadData = $this->upload->data();
            }
        }
    }
}