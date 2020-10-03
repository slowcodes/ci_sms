<?php

 
class Fees_collectible_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get fees_collectible by id
     */
    function get_fees_collectible($id)
    {
        return $this->db->get_where('fees_collectibles',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all fees_collectibles
     */
    function get_all_fees_collectibles()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('fees_collectibles')->result_array();
    }
        
    /*
     * function to add new fees_collectible
     */
    function add_fees_collectible($params)
    {
        $this->db->insert('fees_collectibles',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update fees_collectible
     */
    function update_fees_collectible($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('fees_collectibles',$params);
    }
    
    /*
     * function to delete fees_collectible
     */
    function delete_fees_collectible($id)
    {
        return $this->db->delete('fees_collectibles',array('id'=>$id));
    }
}
