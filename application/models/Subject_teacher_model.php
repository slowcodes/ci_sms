<?php

 
class Subject_teacher_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get subject_teacher by id
     */
    function get_subject_teacher($id)
    {
        return $this->db->get_where('subject_teacher',array('id'=>$id))->row_array();
    }

    /*
     * Get subject_teacher by id
     */
    function get_subjects_assigned($teacher_id)
    {
        $this->db->select('*');
        $this->db->from('subject_teacher');
        $this->db->join('subjects', 'subjects.id = subject_teacher.teacher');
        $this->db->where('subject_teacher.teacher',$teacher_id );
        return $this->db->get()->result_array();
    }
        
    /*
     * Get all subject_teacher
     */
    function get_all_subject_teacher()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('subject_teacher')->result_array();
    }
        
    /*
     * function to add new subject_teacher
     */
    function add_subject_teacher($params)
    {
        $this->db->insert('subject_teacher',$params);
        return $this->db->insert_id();
    }

    
    
    /*
     * function to update subject_teacher
     */
    function update_subject_teacher($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('subject_teacher',$params);
    }
    
    /*
     * function to delete subject_teacher
     */
    function delete_subject_teacher($id)
    {
        return $this->db->delete('subject_teacher',array('id'=>$id));
    }
}
