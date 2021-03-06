<?php

 
class Correct_answer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get correct_answer by id
     */
    function get_correct_answer($id)
    {
        return $this->db->get_where('correct_answers',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all correct_answers
     */
    function get_all_correct_answers()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('correct_answers')->result_array();
    }
        
    /*
     * function to add new correct_answer
     */
    function add_correct_answer($params)
    {
        $this->db->insert('correct_answers',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update correct_answer
     */
    function update_correct_answer($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('correct_answers',$params);
    }
    
    /*
     * function to delete correct_answer
     */
    function delete_correct_answer($id)
    {
        return $this->db->delete('correct_answers',array('id'=>$id));
    }
}
