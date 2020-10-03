<?php

 
class Session_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get session by id
     */
    function get_session($id)
    {
        return $this->db->get_where('session',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all session
     */
    function get_all_session()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('session')->result_array();
    }
        
    /*
     * function to add new session
     */
    function add_session($params)
    {
        $this->db->insert('session',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update session
     */
    function update_session($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('session',$params);
    }
    
    /*
     * function to delete session
     */
    function delete_session($id)
    {
        return $this->db->delete('session',array('id'=>$id));
    }
}
