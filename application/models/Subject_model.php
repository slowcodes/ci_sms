<?php

class Subject_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get subject by id
     */
    function get_subject($id)
    {
        return $this->db->get_where('subjects',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all subjects
     */
    function get_all_subjects()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('subjects')->result_array();
    }
        
    /*
     * function to add new subject
     */
    function add_subject($params)
    {
        $this->db->insert('subjects',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update subject
     */
    function update_subject($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('subjects',$params);
    }
    
    /*
     * function to delete subject
     */
    function delete_subject($id)
    {
        return $this->db->delete('subjects',array('id'=>$id));
    }
}
