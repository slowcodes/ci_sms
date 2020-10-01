<?php

    function makecall($url, $data){
        //$data = array('menu'=>1);
        /* Init cURL resource */
        $ch = curl_init($url);
  
        /* Array Parameter Data */
        
  
        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            
        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            
        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // set the content type json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //  'Content-Type:application/json',
//          'Content-Type:application/x-www-form-urlencoded'
        //  'App-Key: 123456',
        //  'App-Secret: 1233'
        ));

        curl_setopt($ch, CURLOPT_USERPWD, "admin" . ":" . "1234");
            
        /* execute request */
        $result = curl_exec($ch);

        $resArr = array();
        $resArr = json_decode($result);
        
        return $resArr;
    }

?>

