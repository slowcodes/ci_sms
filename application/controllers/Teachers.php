<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teachers extends CI_Controller {
    private $data;
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model'); 
        $this->load->helper('cookie');
        $this->load->library('session');
        $this->load->library('Gateman');

        $this->data = array(
            'username'=>$this->session->userdata('username'),
            'first_name'=>$this->session->userdata('first_name'),
            'last_name'=>$this->session->userdata('last_name'),
            'token'=> $this->session->userdata('token'),
            'user_type'=> $this->session->userdata('user_type')
        );
    }


    public function index(){
        $this->load->view('administrator/teacher_list.php', $this->data);
    }

    public function add(){
        $this->load->view('administrator/add_teacher.php', $this->data);
    }

    public function assign(){
        $this->load->view('administrator/teacher_assign.php', $this->data);
    }
}