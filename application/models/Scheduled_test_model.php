<?php

 
class Scheduled_test_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get scheduled_test by id
     */
    function get_scheduled_test($id)
    {
        return $this->db->get_where('scheduled_tests',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all scheduled_tests
     */
    function get_all_scheduled_tests()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('scheduled_tests')->result_array();
    }
        
    /*
     * function to add new scheduled_test
     */
    function add_scheduled_test($params)
    {
        $this->db->insert('scheduled_tests',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update scheduled_test
     */
    function update_scheduled_test($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('scheduled_tests',$params);
    }
    
    /*
     * function to delete scheduled_test
     */
    function delete_scheduled_test($id)
    {
        return $this->db->delete('scheduled_tests',array('id'=>$id));
    }
}
