<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model'); 
        $this->load->helper('cookie');
        $this->load->library('session');
        $this->load->library('Gateman');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        //$data = array('menu'=>1);
        $logged = $this->session->userdata('logged');
		
		if(isset($logged)){
            
            redirect('/dashboard', true);
            
        }
        $this->load->view('dashboard/pages/login');
        
	}

	public function process(){

        $user = $this->input->post('email');  
        $pass = $this->input->post('password'); 

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE){

            $result = array('error' => true, 
            'route' => '',
            'msg'=>"Could not process your entries. One or more of your entries may be incorrent ".validation_errors());
            
        }
        else{
               
            $user = array('username'=>$this->input->post('email'),
                            'password'=>md5($this->input->post('password'))
                        );

            $email=$this->input->post('email');


            if(is_array($this->User_model->check_login($user)) && count($this->User_model->check_login($user))>0){

                if(!$this->User_model->check_activation($user)){  
                    $user = $this->User_model->get_user_by_email($email);
                    $result = array('error' => true, 
                        'route' => '/register/send_activation_msg/',
                        'msg'=>"Unable to login in. Account may not be active. click <a href='/register/send_activation_msg/'>here</a> to get activation email ");  
                    
                } 
                else{

                    $user =$this->User_model->get_user($email);                
                    $route = "index.php/dashboard/";
                    $user_type=$user['account_type'];
                    
                    if($user_type != 'Student'){ //students may not have valid email addresses
                        $name = $user['first_name']. ' '.$user['last_name'];
                        $this->load->helper('messages');
                        $this->load->library('Mailer');
                        $message=build_login_msg($name);
                        $this->mailer->sendgrid_smtp_mailer($message, 'Your SMLS account has been accessed',$email);
                    }
    
                    $result = array('error' => false, 
                        'route' => $route,
                        'msg'=>"Login sucessful. Click <a href='".$route."'>here</a> 
                        if you not redirected after 5 seconds ".validation_errors()
                    );
                    
                    
                    //redirect('/', 'refresh');
                    
                    $this->session->set_userdata(
                        array(
                            'username'=>$user['username'],
                            'first_name'=>$user['first_name'],
                            'last_name'=>$user['last_name'],
                            'token'=>'',
                            'user_type'=>$user_type
                        )
                    );
                    $this->session->set_userdata(array('logged'=>1,'email'=>$email));
                    $this->load->helper('cookie');
                    set_cookie('is_logged','true',3600);
    
                    
                }

            } 
            else{
                $result = array('error' => true, 
                    'msg'=>"Unable to login in. Invalid credentials."
                );  
            }
            
        }
        echo json_encode($result);

    }

    public function logout(){
        $this->session->unset_userdata(array('username', 'first_name', 'last_name', 'user_type'));
        header("location: /index.php");
    }

}
