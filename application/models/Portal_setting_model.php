<?php

 
class Portal_setting_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get portal_setting by id
     */
    function get_portal_setting($id)
    {
        return $this->db->get_where('portal_settings',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all portal_settings
     */
    function get_all_portal_settings()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('portal_settings')->result_array();
    }
        
    /*
     * function to add new portal_setting
     */
    function add_portal_setting($params)
    {
        $this->db->insert('portal_settings',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update portal_setting
     */
    function update_portal_setting($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('portal_settings',$params);
    }
    
    /*
     * function to delete portal_setting
     */
    function delete_portal_setting($id)
    {
        return $this->db->delete('portal_settings',array('id'=>$id));
    }
}
