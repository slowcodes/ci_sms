<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    private $data;
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('User_model','State_model','Parent_model')); 
        $this->load->helper('cookie');
        $this->load->library('session');
        $this->load->library('Gateman');

        $this->data = array(
            'username'=>$this->session->userdata('username'),
            'first_name'=>$this->session->userdata('first_name'),
            'last_name'=>$this->session->userdata('last_name'),
            'token'=> $this->session->userdata('token'),
            'user_type'=> $this->session->userdata('user_type'),
            'states' => $this->State_model->get_all_states(),
            'parents' => $this->Parent_model->get_all_parents()
        );
    }


    public function index(){
    
        $this->load->view('administrator/parent_list.php', $this->data);
    }

    public function profile(){
        
        $this->load->view('administrator/profile.php', $this->data);
    }

    public function account_setting(){
        
        $this->load->view('administrator/add_parent.php', $this->data);
    }


}