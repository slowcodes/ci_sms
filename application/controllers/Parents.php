<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parents extends CI_Controller {
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

    public function add(){
        
        $this->load->view('administrator/add_parent.php', $this->data);
    }

    public function process_add(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[40]|is_unique[users.username]',array('required'      => 'You have not provided %s.','is_unique'     => 'This %s already exists.'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('conf_password', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email','required|min_length[3]|max_length[40]|is_unique[users.username]',array('required'      => 'You have not provided %s.','is_unique'     => 'This %s already exists.'));
       
        if($this->form_validation->run() == FALSE)     
        {   
            //redirect('user/index');
            $return = array('error'=>true, 'msg'=>"We encountered an error while trying to process your entries. Please carefully cross-check the values provided and try again".validation_errors());
            echo json_encode($return); 
        }
        else{
            $params = array(
				'password' => md5($this->input->post('password')),
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'username' => $this->input->post('username'),
				'account_type' => 'Parent',
				'active' => '1',
				'middle_name' => $this->input->post('middle_name'),
				'sex' => $this->input->post('sex'),
            );
            $user_id = $this->User_model->add_user($params);
            
            $params = array(
                'user_id' => $user_id,
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'state_id' => $this->input->post('state_id')
            );
            $parent_id = $this->Parent_model->add_parent($params);
            
            $return = array('error'=>false, 'msg'=>'registration was successful. Parent can now access the portal with the registered credentails');
            echo json_encode($return);
        }
    }
}