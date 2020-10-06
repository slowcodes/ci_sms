<?php

 
class Learning_resource_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get learning_resource by id
     */
    function get_learning_resource($id)
    {
        return $this->db->get_where('learning_resource',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all learning_resource
     */
    function get_all_learning_resource()
    {
        $this->db->select('*');
        $this->db->from('learning_resource');
        $this->db->join('subjects', 'subjects.id = learning_resource.subject');
        return $this->db->get()->result_array();
        
        //$this->db->order_by('id', 'desc');
        //return $this->db->get('learning_resource')->result_array();
    }
        
    /*
     * function to add new learning_resource
     */
    function add_learning_resource($params)
    {
        $this->db->insert('learning_resource',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update learning_resource
     */
    function update_learning_resource($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('learning_resource',$params);
    }
    
    /*
     * function to delete learning_resource
     */
    function delete_learning_resource($id)
    {
        return $this->db->delete('learning_resource',array('id'=>$id));
    }
}
