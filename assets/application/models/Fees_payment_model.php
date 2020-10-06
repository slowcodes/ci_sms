<?php

 
class Fees_payment_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get fees_payment by id
     */
    function get_fees_payment($id)
    {
        return $this->db->get_where('fees_payments',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all fees_payments
     */
    function get_all_fees_payments()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('fees_payments')->result_array();
    }
        
    /*
     * function to add new fees_payment
     */
    function add_fees_payment($params)
    {
        $this->db->insert('fees_payments',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update fees_payment
     */
    function update_fees_payment($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('fees_payments',$params);
    }
    
    /*
     * function to delete fees_payment
     */
    function delete_fees_payment($id)
    {
        return $this->db->delete('fees_payments',array('id'=>$id));
    }
}
