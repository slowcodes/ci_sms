<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {
    private $data;
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Academic_level_model','Subject_model', 'Learning_resource_model')); 
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
            'subjects' => $this->Subject_model->get_all_subjects(),
            'resources' => $this->Learning_resource_model->get_all_learning_resource()
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
            $file_name = $_FILES['file']['name'];
       
            //Load upload library
            $this->load->library('upload',$config); 
       
            // File upload
            if($this->upload->do_upload('file')){
              // Get data about the file
              $uploadData = $this->upload->data();
              $fileExt = pathinfo($file_name, PATHINFO_EXTENSION);
              //register file as uploaded
              $this->Learning_resource_model->add_learning_resource(
                  array(
                    'title'=>$this->session->userdata('description'),
                    'subject'=>$this->session->userdata('subject'),
                    'level'=>$this->session->userdata('level'),
                    'url' => 'uploads/'.$file_name,
                    'media_type' => $fileExt
                  )
              );
            }
        }
    }
}