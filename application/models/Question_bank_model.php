<?php

 
class Question_bank_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get question_bank by id
     */
    function get_question_bank($id)
    {
        return $this->db->get_where('question_bank',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all question_bank
     */
    function get_all_question_bank()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('question_bank')->result_array();
    }
        
    /*
     * function to add new question_bank
     */
    function add_question_bank($params)
    {
        $this->db->insert('question_bank',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update question_bank
     */
    function update_question_bank($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('question_bank',$params);
    }
    
    /*
     * function to delete question_bank
     */
    function delete_question_bank($id)
    {
        return $this->db->delete('question_bank',array('id'=>$id));
    }
}
