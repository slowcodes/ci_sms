<?php


 
class Classroom_exam_result_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get classroom_exam_result by id
     */
    function get_classroom_exam_result($id)
    {
        return $this->db->get_where('classroom_exam_results',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all classroom_exam_results
     */
    function get_all_classroom_exam_results()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('classroom_exam_results')->result_array();
    }
        
    /*
     * function to add new classroom_exam_result
     */
    function add_classroom_exam_result($params)
    {
        $this->db->insert('classroom_exam_results',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update classroom_exam_result
     */
    function update_classroom_exam_result($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('classroom_exam_results',$params);
    }
    
    /*
     * function to delete classroom_exam_result
     */
    function delete_classroom_exam_result($id)
    {
        return $this->db->delete('classroom_exam_results',array('id'=>$id));
    }
}
