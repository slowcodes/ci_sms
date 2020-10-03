<?php
 
class Fee_invoice_component_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get fee_invoice_component by id
     */
    function get_fee_invoice_component($id)
    {
        return $this->db->get_where('fee_invoice_components',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all fee_invoice_components
     */
    function get_all_fee_invoice_components()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('fee_invoice_components')->result_array();
    }
        
    /*
     * function to add new fee_invoice_component
     */
    function add_fee_invoice_component($params)
    {
        $this->db->insert('fee_invoice_components',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update fee_invoice_component
     */
    function update_fee_invoice_component($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('fee_invoice_components',$params);
    }
    
    /*
     * function to delete fee_invoice_component
     */
    function delete_fee_invoice_component($id)
    {
        return $this->db->delete('fee_invoice_components',array('id'=>$id));
    }
}
