<?php

 
class Scheduled_test_question_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get scheduled_test_question by id
     */
    function get_scheduled_test_question($id)
    {
        return $this->db->get_where('scheduled_test_questions',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all scheduled_test_questions
     */
    function get_all_scheduled_test_questions()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('scheduled_test_questions')->result_array();
    }
        
    /*
     * function to add new scheduled_test_question
     */
    function add_scheduled_test_question($params)
    {
        $this->db->insert('scheduled_test_questions',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update scheduled_test_question
     */
    function update_scheduled_test_question($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('scheduled_test_questions',$params);
    }
    
    /*
     * function to delete scheduled_test_question
     */
    function delete_scheduled_test_question($id)
    {
        return $this->db->delete('scheduled_test_questions',array('id'=>$id));
    }
}
