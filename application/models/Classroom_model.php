<?php


class Classroom_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get classroom by id
     */
    function get_classroom($id)
    {
        return $this->db->get_where('classrooms',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all classrooms
     */
    function get_all_classrooms()
    {
        $this->db->select('*');
        $this->db->from('classrooms');
        $this->db->join('academic_levels', 'academic_levels.id = classrooms.level_id');
        return $this->db->get()->result_array();
    
    }
        
    /*
     * function to add new classroom
     */
    function add_classroom($params)
    {
        $this->db->insert('classrooms',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update classroom
     */
    function update_classroom($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('classrooms',$params);
    }
    
    /*
     * function to delete classroom
     */
    function delete_classroom($id)
    {
        return $this->db->delete('classrooms',array('id'=>$id));
    }
}
