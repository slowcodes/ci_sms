<?php

 
class Scheduled_test_result_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get scheduled_test_result by id
     */
    function get_scheduled_test_result($id)
    {
        return $this->db->get_where('scheduled_test_results',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all scheduled_test_results
     */
    function get_all_scheduled_test_results()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('scheduled_test_results')->result_array();
    }
        
    /*
     * function to add new scheduled_test_result
     */
    function add_scheduled_test_result($params)
    {
        $this->db->insert('scheduled_test_results',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update scheduled_test_result
     */
    function update_scheduled_test_result($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('scheduled_test_results',$params);
    }
    
    /*
     * function to delete scheduled_test_result
     */
    function delete_scheduled_test_result($id)
    {
        return $this->db->delete('scheduled_test_results',array('id'=>$id));
    }
}
