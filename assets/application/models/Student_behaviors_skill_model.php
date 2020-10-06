<?php

 
class Student_behaviors_skill_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get student_behaviors_skill by id
     */
    function get_student_behaviors_skill($id)
    {
        return $this->db->get_where('student_behaviors_skills',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all student_behaviors_skills
     */
    function get_all_student_behaviors_skills()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('student_behaviors_skills')->result_array();
    }
        
    /*
     * function to add new student_behaviors_skill
     */
    function add_student_behaviors_skill($params)
    {
        $this->db->insert('student_behaviors_skills',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update student_behaviors_skill
     */
    function update_student_behaviors_skill($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('student_behaviors_skills',$params);
    }
    
    /*
     * function to delete student_behaviors_skill
     */
    function delete_student_behaviors_skill($id)
    {
        return $this->db->delete('student_behaviors_skills',array('id'=>$id));
    }
}
