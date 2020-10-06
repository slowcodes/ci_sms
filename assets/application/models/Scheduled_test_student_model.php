<?php

 
class Scheduled_test_student_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get scheduled_test_student by id
     */
    function get_scheduled_test_student($id)
    {
        return $this->db->get_where('scheduled_test_students',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all scheduled_test_students
     */
    function get_all_scheduled_test_students()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('scheduled_test_students')->result_array();
    }
        
    /*
     * function to add new scheduled_test_student
     */
    function add_scheduled_test_student($params)
    {
        $this->db->insert('scheduled_test_students',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update scheduled_test_student
     */
    function update_scheduled_test_student($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('scheduled_test_students',$params);
    }
    
    /*
     * function to delete scheduled_test_student
     */
    function delete_scheduled_test_student($id)
    {
        return $this->db->delete('scheduled_test_students',array('id'=>$id));
    }
}
