<?php


 
class Term_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get term by id
     */
    function get_term($id)
    {
        return $this->db->get_where('terms',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all terms
     */
    function get_all_terms()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('terms')->result_array();
    }
        
    /*
     * function to add new term
     */
    function add_term($params)
    {
        $this->db->insert('terms',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update term
     */
    function update_term($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('terms',$params);
    }
    
    /*
     * function to delete term
     */
    function delete_term($id)
    {
        return $this->db->delete('terms',array('id'=>$id));
    }
}
