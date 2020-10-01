<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailbox extends CI_Controller {
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
        
        $this->load->view('general/mailbox', $this->data);
    }

    public function compose(){
        
        $this->load->view('general/mailbox_compose', $this->data);
    }

    public function mail_details($mailId){
        
        $this->load->view('general/mailbox_details', $this->data);
    }

}