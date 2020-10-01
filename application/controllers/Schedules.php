<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedules extends CI_Controller {
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
        $this->load->view('administrator/exam_shedules.php', $this->data);
    }

    public function tests(){
        $this->load->view('administrator/test_schedules.php', $this->data);
    }

    public function add_tests(){
        //$this->load->view('administrator/test_schedules.php', $this->data);
    }

    public function exams(){
        $this->load->view('administrator/exam_schedules.php', $this->data);
    }

    public function add_exam(){
        //$this->load->view('administrator/exam_schedules.php', $this->data);
    }

    public function classes(){
        $this->load->view('administrator/classes_schedules.php', $this->data);
    }

    public function add_classes(){
        $this->load->view('administrator/classes_schedules.php', $this->data);
    }
    
}