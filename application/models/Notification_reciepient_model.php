<?php

 
class Notification_reciepient_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get notification_reciepient by id
     */
    function get_notification_reciepient($id)
    {
        return $this->db->get_where('notification_reciepients',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all notification_reciepients
     */
    function get_all_notification_reciepients()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('notification_reciepients')->result_array();
    }
        
    /*
     * function to add new notification_reciepient
     */
    function add_notification_reciepient($params)
    {
        $this->db->insert('notification_reciepients',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update notification_reciepient
     */
    function update_notification_reciepient($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('notification_reciepients',$params);
    }
    
    /*
     * function to delete notification_reciepient
     */
    function delete_notification_reciepient($id)
    {
        return $this->db->delete('notification_reciepients',array('id'=>$id));
    }
}
