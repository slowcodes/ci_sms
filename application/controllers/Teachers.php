<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teachers extends CI_Controller {
    private $data;
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('User_model','Form_teacher_model','Subject_teacher_model','Teacher_model','Classroom_model','Level_subject_model','State_model')); 
        $this->load->helper('cookie');
        $this->load->library('session');
        $this->load->library('Gateman');

        $this->data = array(
            'username'=>$this->session->userdata('username'),
            'first_name'=>$this->session->userdata('first_name'),
            'last_name'=>$this->session->userdata('last_name'),
            'token'=> $this->session->userdata('token'),
            'user_type'=> $this->session->userdata('user_type'),
            'teachers' => $this->Teacher_model->get_all_teachers(),
            'states' => $this->State_model->get_all_states(),
            'classrooms' => $this->Classroom_model->get_all_classrooms(),
            'subjects' => $this->Level_subject_model->get_all_level_subjects()

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

    public function process_add(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[40]|is_unique[users.username]',array('required'      => 'You have not provided %s.','is_unique'     => 'This %s already exists.'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('conf_password', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email','required|min_length[3]|max_length[40]|is_unique[users.username]',array('required'      => 'You have not provided %s.','is_unique'     => 'This %s already exists.'));
        
        $return = array();
        if($this->form_validation->run() == FALSE)     
        {   
            //redirect('user/index');
            $return = array('error'=>true, 'msg'=>"We encountered an error while trying to process your entries. Please carefully cross-check the values provided and try again".validation_errors());
             
        }
        else{

            $params = array(
				'password' => md5($this->input->post('password')),
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'username' => $this->input->post('username'),
				'account_type' => 'Teacher',
				'active' => '1',
				'middle_name' => $this->input->post('middle_name'),
				'sex' => $this->input->post('sex'),
            );
            $user_id = $this->User_model->add_user($params);

            $params = array(
                'staff_id' => $this->input->post('staff_id'),
                'userid' => $user_id,
				'dob' => $this->input->post('dob'),
				'highest_qualification' => $this->input->post('highest_qualification'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('contact_address'),
				'phone' => $this->input->post('phone'),
				'state_of_origin' => $this->input->post('state_of_origin'),
            );
            
            $teacher_id = $this->Teacher_model->add_teacher($params);
            $return = array('error'=>false, 'msg'=>'registration was successful. The can now access the portal with the registered credentails and update his/her academic qualifications');

        }
        echo json_encode($return);

    }

    public function add_subject_teacher($subject_id, $teacher_id)
    {
        $this->Subject_teacher_model->add_subject_teacher(array(
            'teacher_id'=>$teacher_id,
            'subject_id'=>$subject_id,
            'term'=>1
        ));
        //echo $subject_id.' ';
    }

    public function get_teacher($id){

        $this->Teacher_model->get_teacher($id);
        $response = array(
            'error'=>false, 
            'teacher'=>$this->Teacher_model->get_teacher($id),
            'msg' =>'Sucessful', 
            'subject_assigned' =>$this->Subject_teacher_model->get_subjects_assigned($id),
            'classes' => $this->Form_teacher_model->get_form_teacher($id)
        );
        echo json_encode($response);

    }
}