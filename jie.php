<?php

    function generate_char( $length  ) {  
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';  
    $password = '';  
    for ( $i = 0; $i < $length; $i++ )  
    {  
        $password .= $chars[ mt_rand(0, strlen($chars) - 1) ];  
    }  
        return $password;  
    } 

    function generate_num( $length  ) {  
    $chars = '0123456789';  
    $password = '';  
    for ( $i = 0; $i < $length; $i++ )  
    {  
        $password .= $chars[ mt_rand(0, strlen($chars) - 1) ];  
    }  
        return $password;  
    } 
  
    $randde = '';
	$header = 'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 8_1_1 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Mobile/';
    $header = $header.$randde.' MicroMessenger/6.0.1 NetType/WIFI';



    function randip(){
        return rand(1,254).'.'.rand(1,254).'.'.rand(1,254).'.'.rand(1,254);
    }

    $ip = array();
    for ($p=1; $p < 100; $p++) { 
        # code...
        $ip[]=randip();
    }
        $req_url = 'http://www.vote8.cn/m/52SUBT2?from=groupmessage&isappinstalled=0';

 //   foreach ($ip as $forward => $cip) {  
          
        $ch = curl_init();  
          
        curl_setopt($ch, CURLOPT_URL, $req_url);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
                //"X-FORWARDED-FOR:$forward",  
                "CLIENT-IP:$cip"  
        ));  
        curl_setopt($ch, CURLOPT_REFERER, 'http://www.vote8.cn/m/');  
        curl_setopt($ch, CURLOPT_HEADER, 1);  
          
        echo curl_exec($ch);  

       //die();       
        curl_close($ch);  

  //  }  

   set_time_limit(120);

