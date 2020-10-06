<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {
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
        $this->load->view('administrator/fees_categories.php', $this->data);
    }

    public function fees_categories(){
        $this->load->view('administrator/fees_categories.php', $this->data);
    }

    public function collectible_fees(){
        $this->load->view('administrator/collectible_fees.php', $this->data);
    }

    public function invoice_receipts(){
        $this->load->view('administrator/invoice_receipts.php', $this->data);
    }

    public function payment_history(){
        $this->load->view('administrator/payment_history.php', $this->data);
    }
    
}