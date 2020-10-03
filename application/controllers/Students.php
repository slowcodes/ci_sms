<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {
    private $data;
    function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('session');
        $this->load->library(array('Gateman','form_validation'));
        $this->load->model(array('User_model','Student_model','Parent_model','Academic_level_model', 'Classroom_model'));


        $this->data = array(
            'username'=>$this->session->userdata('username'),
            'first_name'=>$this->session->userdata('first_name'),
            'last_name'=>$this->session->userdata('last_name'),
            'token'=> $this->session->userdata('token'),
            'user_type'=> $this->session->userdata('user_type'),
            'students' => $this->Student_model->get_all_students(),
            'parents' => $this->Parent_model->get_all_parents(),
            'levels'=>$this->Academic_level_model->get_all_academic_levels(),
            'classrooms' =>$this->Classroom_model->get_all_classrooms()
        );
    }


    public function index(){
    
        $this->load->view('administrator/student_list.php', $this->data);
    }

    public function add(){
        //array_push($data, $parents);
        $this->load->view('administrator/add_student.php', $this->data);
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
				'account_type' => 'Student',
				'active' => '1',
				'middle_name' => $this->input->post('middle_name'),
				'sex' => $this->input->post('sex'),
            );
            $user_id = $this->User_model->add_user($params);
            
            $params = array(
                'user_id'=>$user_id,
				'dob' => $this->input->post('dob'),
				'religion' => $this->input->post('religion'),
				'blood_group' => $this->input->post('blood_group'),
				'classroom_id' => $this->input->post('classroom_id'),
				'roll_id' => $this->input->post('roll_id'),
				'parent_id' => $this->input->post('parent_id'),
				'parent_relationship' => $this->input->post('parent_relationship'),
            );
            $student_id = $this->Student_model->add_student($params);
            
            $return = array('error'=>false, 'msg'=>'registration was successful. Student can now access the portal with the resgistered credentails');
            echo json_encode($return);
            
        }
    }
}