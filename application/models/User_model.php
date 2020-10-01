<?php

 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
  
    /*
     * Get user by id
     */
    function get_user_by_email($id)
    {
        return $this->db->get_where('users',array('username'=>$id))->row_array();
    }
    /*
     * Get user by email
     */
    function get_user($id)
    {
        return $this->db->get_where('users',array('username'=>$id))->row_array();
    }
    
    /*
     * Get user by email
     */
    function get_user_by_id($id)
    {
        return $this->db->get_where('users',array('id'=>$id))->row_array();
    }
    
    function is_registered_email($email)
    {
        $rows = $this->db->get_where('users',array('username'=>$email))->num_rows();
        if($rows >= 1){
           return true;
        }
        else{
           return false;    
        }
    }



    function check_login($id)
    {
        return $this->db->get_where('users',
        array(
            'username'=>$id['username'],
            'password'=>$id['password'],
            
            ))->row_array();
    }
    
    function check_activation($id)
    {
        if ($this->db->get_where('users',array(
            'username'=>$id['username'],
            //'password'=>$id['password'],
            'active'=>'1'))->num_rows()>0){
                return true;
        }
        return false;
    }

    /*
     * Get all users
     */
    function get_all_users()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('users')->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($id,$params)
    {
        $this->db->where('username',$id);
        return $this->db->update('users',$params);
    }

    /*
     * function to activate user account
     */
    function activate_user($id)
    {
        if ($this->db->get_where('users',array(
            'md5(username)'=>$id,
            'active'=>1)
            )->num_rows()>0){
                
            return "Account is already active. You can now <a href='/login/'>proceed to login</a>";
        }
        elseif($this->db->get_where('users',array('md5(username)'=>$id))->num_rows()>0)
        {
            $this->db->where('md5(username)',$id);
            $this->db->update('users', array('actiavte'=>1));
            return "Account is now activated. You can now <a href='/login/'>proceed to login</a>";
        }
        else{
            return "Invalid account token. Please request a geniune activation link ";
        }

    }
    
    
    /*
     * function to delete user
     */
    function delete_user($id)
    {
        return $this->db->delete('users',array('id'=>$id));
    }
}
