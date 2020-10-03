<?php


 
class Classroom_test_result_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get classroom_test_result by id
     */
    function get_classroom_test_result($id)
    {
        return $this->db->get_where('classroom_test_results',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all classroom_test_results
     */
    function get_all_classroom_test_results()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('classroom_test_results')->result_array();
    }
        
    /*
     * function to add new classroom_test_result
     */
    function add_classroom_test_result($params)
    {
        $this->db->insert('classroom_test_results',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update classroom_test_result
     */
    function update_classroom_test_result($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('classroom_test_results',$params);
    }
    
    /*
     * function to delete classroom_test_result
     */
    function delete_classroom_test_result($id)
    {
        return $this->db->delete('classroom_test_results',array('id'=>$id));
    }
}
