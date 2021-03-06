<?php

class Teachers_qualification_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get teachers_qualification by id
     */
    function get_teachers_qualification($id)
    {
        return $this->db->get_where('teachers_qualifications',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all teachers_qualifications
     */
    function get_all_teachers_qualifications()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('teachers_qualifications')->result_array();
    }
        
    /*
     * function to add new teachers_qualification
     */
    function add_teachers_qualification($params)
    {
        $this->db->insert('teachers_qualifications',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update teachers_qualification
     */
    function update_teachers_qualification($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('teachers_qualifications',$params);
    }
    
    /*
     * function to delete teachers_qualification
     */
    function delete_teachers_qualification($id)
    {
        return $this->db->delete('teachers_qualifications',array('id'=>$id));
    }
}
