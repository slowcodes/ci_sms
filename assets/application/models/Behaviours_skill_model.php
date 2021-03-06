<?php


 
class Behaviours_skill_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db->cache_on();
    }
    
    /*
     * Get behaviours_skill by id
     */
    function get_behaviours_skill($id)
    {
        return $this->db->get_where('behaviours_skills',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all behaviours_skills
     */
    function get_all_behaviours_skills()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('behaviours_skills')->result_array();
    }
        
    /*
     * function to add new behaviours_skill
     */
    function add_behaviours_skill($params)
    {
        $this->db->insert('behaviours_skills',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update behaviours_skill
     */
    function update_behaviours_skill($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('behaviours_skills',$params);
    }
    
    /*
     * function to delete behaviours_skill
     */
    function delete_behaviours_skill($id)
    {
        return $this->db->delete('behaviours_skills',array('id'=>$id));
    }
}
