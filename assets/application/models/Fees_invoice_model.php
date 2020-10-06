<?php

 
class Fees_invoice_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get fees_invoice by id
     */
    function get_fees_invoice($id)
    {
        return $this->db->get_where('fees_invoices',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all fees_invoices
     */
    function get_all_fees_invoices()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('fees_invoices')->result_array();
    }
        
    /*
     * function to add new fees_invoice
     */
    function add_fees_invoice($params)
    {
        $this->db->insert('fees_invoices',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update fees_invoice
     */
    function update_fees_invoice($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('fees_invoices',$params);
    }
    
    /*
     * function to delete fees_invoice
     */
    function delete_fees_invoice($id)
    {
        return $this->db->delete('fees_invoices',array('id'=>$id));
    }
}
