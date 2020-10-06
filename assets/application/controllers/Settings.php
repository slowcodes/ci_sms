<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
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
        
        $this->load->view('administrator/grade_list', $this->data);
    }

    public function school($view){
        //echo $view;
        if(strcmp($view, "web")==0){
            $this->load->view('administrator/school_settings.php', $this->data);
        }
        if(strcmp($view, "portal")==0){
            $this->load->view('administrator/portal_setting.php', $this->data);
        }
    }

    public function announcements(){
        
        $this->load->view('administrator/announcement.php', $this->data);
    }
}