<?php

 
class Fees_collectible_category_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get fees_collectible_category by id
     */
    function get_fees_collectible_category($id)
    {
        return $this->db->get_where('fees_collectible_categories',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all fees_collectible_categories
     */
    function get_all_fees_collectible_categories()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('fees_collectible_categories')->result_array();
    }
        
    /*
     * function to add new fees_collectible_category
     */
    function add_fees_collectible_category($params)
    {
        $this->db->insert('fees_collectible_categories',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update fees_collectible_category
     */
    function update_fees_collectible_category($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('fees_collectible_categories',$params);
    }
    
    /*
     * function to delete fees_collectible_category
     */
    function delete_fees_collectible_category($id)
    {
        return $this->db->delete('fees_collectible_categories',array('id'=>$id));
    }
}
