<?php

 
class Form_teacher_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get form_teacher by id
     */
    function get_form_teacher($id)
    {
        $this->db->select('*');
        $this->db->from('form_teachers');
        $this->db->join('classrooms', 'form_teachers.classroom_id = classrooms.id');
        $this->db->where('form_teachers.teacher_id',$id );
        return $this->db->get()->result_array();
    }
        
    /*
     * Get all form_teachers
     */
    function get_all_form_teachers()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('form_teachers')->result_array();
    }
        
    /*
     * function to add new form_teacher
     */
    function add_form_teacher($params)
    {
        $this->db->insert('form_teachers',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update form_teacher
     */
    function update_form_teacher($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('form_teachers',$params);
    }
    
    /*
     * function to delete form_teacher
     */
    function delete_form_teacher($id)
    {
        return $this->db->delete('form_teachers',array('id'=>$id));
    }
}
