<?php

 
class Student_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get student by user_id
     */
    function get_student($user_id)
    {
        return $this->db->get_where('students',array('user_id'=>$user_id))->row_array();
    }
        
    /*
     * Get all students
     */
    function get_all_students()
    {
        
        $this->db->select('*');
        $this->db->from('students');
        $this->db->join('users', 'users.id = students.user_id');
        return $this->db->get()->result_array();
        
    }
        
    /*
     * function to add new student
     */
    function add_student($params)
    {
        $this->db->insert('students',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update student
     */
    function update_student($user_id,$params)
    {
        $this->db->where('user_id',$user_id);
        return $this->db->update('students',$params);
    }
    
    /*
     * function to delete student
     */
    function delete_student($user_id)
    {
        return $this->db->delete('students',array('user_id'=>$user_id));
    }
}
