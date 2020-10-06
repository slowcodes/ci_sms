<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {
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
        $this->load->view('administrator/broadsheet.php', $this->data);
    }

    public function broad_sheet(){
        $this->load->view('administrator/broadsheet.php', $this->data);
    }

    public function term_report(){
        $this->load->view('administrator/term_report.php', $this->data);
    }

    public function midterm_report(){
        $this->load->view('administrator/midterm_report.php', $this->data);
    }

    public function generate_reports(){
        $this->load->view('administrator/generate_report.php', $this->data);
    }
}