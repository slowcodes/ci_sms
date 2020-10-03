<?php

 
class Question_answer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get question_answer by id
     */
    function get_question_answer($id)
    {
        return $this->db->get_where('question_answers',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all question_answers
     */
    function get_all_question_answers()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('question_answers')->result_array();
    }
        
    /*
     * function to add new question_answer
     */
    function add_question_answer($params)
    {
        $this->db->insert('question_answers',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update question_answer
     */
    function update_question_answer($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('question_answers',$params);
    }
    
    /*
     * function to delete question_answer
     */
    function delete_question_answer($id)
    {
        return $this->db->delete('question_answers',array('id'=>$id));
    }
}
