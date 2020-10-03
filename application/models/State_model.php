<?php


 
class State_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get state by id
     */
    function get_state($id)
    {
        return $this->db->get_where('states',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all states
     */
    function get_all_states()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('states')->result_array();
    }
        
    /*
     * function to add new states
     */
    function add_state($params)
    {
        $this->db->insert('states',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update states
     */
    function update_state($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('states',$params);
    }
    
    /*
     * function to delete state
     */
    function delete_state($id)
    {
        return $this->db->delete('states',array('id'=>$id));
    }
}
