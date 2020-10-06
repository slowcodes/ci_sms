<?php

 
class Notification_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get notification by id
     */
    function get_notification($id)
    {
        return $this->db->get_where('notifications',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all notifications
     */
    function get_all_notifications()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('notifications')->result_array();
    }
        
    /*
     * function to add new notification
     */
    function add_notification($params)
    {
        $this->db->insert('notifications',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update notification
     */
    function update_notification($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('notifications',$params);
    }
    
    /*
     * function to delete notification
     */
    function delete_notification($id)
    {
        return $this->db->delete('notifications',array('id'=>$id));
    }
}
