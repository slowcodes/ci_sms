<?php

 
class Virtual_class_student_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
        
    }
    
    /*
     * Get virtual_class_student by id
     */
    function get_virtual_class_student($id)
    {
        return $this->db->get_where('virtual_class_students',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all virtual_class_students
     */
    function get_all_virtual_class_students()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('virtual_class_students')->result_array();
    }
        
    /*
     * function to add new virtual_class_student
     */
    function add_virtual_class_student($params)
    {
        $this->db->insert('virtual_class_students',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update virtual_class_student
     */
    function update_virtual_class_student($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('virtual_class_students',$params);
    }
    
    /*
     * function to delete virtual_class_student
     */
    function delete_virtual_class_student($id)
    {
        return $this->db->delete('virtual_class_students',array('id'=>$id));
    }
}
