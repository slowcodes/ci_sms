<?php

 
class Virtual_class_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get virtual_class by id
     */
    function get_virtual_class($id)
    {
        return $this->db->get_where('virtual_classes',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all virtual_classes
     */
    function get_all_virtual_classes()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('virtual_classes')->result_array();
    }
        
    /*
     * function to add new virtual_class
     */
    function add_virtual_class($params)
    {
        $this->db->insert('virtual_classes',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update virtual_class
     */
    function update_virtual_class($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('virtual_classes',$params);
    }
    
    /*
     * function to delete virtual_class
     */
    function delete_virtual_class($id)
    {
        return $this->db->delete('virtual_classes',array('id'=>$id));
    }
}
