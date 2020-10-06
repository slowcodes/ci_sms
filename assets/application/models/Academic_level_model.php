<?php

 
class Academic_level_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get academic_level by id
     */
    function get_academic_level($id)
    {
        return $this->db->get_where('academic_levels',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all academic_levels
     */
    function get_all_academic_levels()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('academic_levels')->result_array();
    }
        
    /*
     * function to add new academic_level
     */
    function add_academic_level($params)
    {
        $this->db->insert('academic_levels',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update academic_level
     */
    function update_academic_level($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('academic_levels',$params);
    }
    
    /*
     * function to delete academic_level
     */
    function delete_academic_level($id)
    {
        return $this->db->delete('academic_levels',array('id'=>$id));
    }
}
