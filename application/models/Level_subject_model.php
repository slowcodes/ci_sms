<?php

 
class Level_subject_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get level_subject by id
     */
    function get_level_subject($id)
    {
        return $this->db->get_where('level_subjects',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all level_subjects
     */
    function get_all_level_subjects()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('level_subjects')->result_array();
    }
        
    /*
     * function to add new level_subject
     */
    function add_level_subject($params)
    {
        $this->db->insert('level_subjects',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update level_subject
     */
    function update_level_subject($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('level_subjects',$params);
    }
    
    /*
     * function to delete level_subject
     */
    function delete_level_subject($id)
    {
        return $this->db->delete('level_subjects',array('id'=>$id));
    }
}
