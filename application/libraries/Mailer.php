<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailer  {

    //$this->load->library('encryption');
    function sendgrid_smtp_mailer($message,$subject,$email_to){
        $CI =& get_instance();

        $CI->load->library('email');    
        $config['protocol']    = 'smtp';

        $config['smtp_host']    = 'smtp.sendgrid.net';//'ssl://smtp.gmail.com';
        $config['smtp_port']    = '587';//'26';//'465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'apikey';
        $config['smtp_pass']    = 'SG.cbvlwU2cSDSETA_ax4mTTw.A4CVwFZmgAfrDU5cmj4Vleg_StpAvIflRU0egVIzGV4';


        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      
                
        $CI->email->initialize($config);
                
        $CI->email->from('audit@datatruck.ng', 'DataTruck Console');
        $CI->email->to($email_to); 
        $CI->email->subject($subject);
        $CI->email->message($message);
        $CI->email->bcc('ezenna.charles@nevs.com.ng');  
                
        $CI->email->send();
    }
}
?>