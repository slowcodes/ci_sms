<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gateman  {

    function __construct()
    {        
        $CI =& get_instance();

        $CI->load->helper('cookie');
        $CI->load->library('session');
        $CI->load->helper('url');

        //check_visitor();
    }

    public function check_visitor(){
        
        if(get_cookie('islogged')!==null){
            redirect('/login','refresh');
        }
    }

    public function renew_entrypass(){

    }
}

?>
