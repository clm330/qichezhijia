<?php

// $a ='HTTP/1.1 200 OK Connection: close Date: Fri, 12 Dec 2014 03:47:22 GMT Server: Microsoft-IIS/6.0 X-Powered-By: ASP.NET X-Powered-By: PHP/5.2.6 Set-Cookie: PHPSESSID=8d8556b8254232caf5ce9b371e53e4e6; path=/ Expires: Thu, 19 Nov 1981 08:52:00 GMT Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0 Pragma: no-cache Content-type: text/html { "info":"投票成功！", "status":"1" }';


//     if(preg_match('~"status":"1"~',$a))
//     {
//      echo 'abc';
//     }


// echo '<h1>投票成功</h1>';
// die();
// //     die();


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
  
    $randde = generate_num(2).generate_char(1).generate_num(3);
    $iosversion = ''.rand(5,8).'_'.rand(1,11).'_'.rand(1,11);
    // echo $iosversion;
    // die();

    //$header = 'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 8_1_1 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Mobile/';
    $header = 'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS '.$iosversion.' like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Mobile/';
    $header = $header.$randde.' MicroMessenger/6.0.1 NetType/WIFI';

    function randip(){
        return rand(1,254).'.'.rand(1,254).'.'.rand(1,254).'.'.rand(1,254);
    }

    $ip = array();
    for ($p=1; $p <= 1; $p++) { 
        # code...
        $ip['host']=randip();
    }

    //echo 'anc';
// echo $ip['host'];
// echo $header;
$key = $ip['host'];



// print_r(array( 
//             'Accept-Language: zh-cn',
//             'Connection: Keep-Alive',
//             'Cache-Control: no-cache',
//             "X-FORWARDED-FOR:$key",                
//             "Host:$key"  
//     ));
// die();


  //  foreach ($ip as $key => $value) {
        # code...
     //echo 'abc';  
    
    $req_url = 'http://www.028msh.com/qqxqs/index.php?s=/Index/tp/id/63';

    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $req_url);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $header); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
            'Accept-Language: zh-cn',
            'Connection: Keep-Alive',
            'Cache-Control: no-cache',
            "X-FORWARDED-FOR:".$key,                
            //"Host:".$key 
    ));  
    curl_setopt($ch, CURLOPT_REFERER, 'http://www.028msh.com/qqxqs/index.php?s=/Index/newslist/id/5');  
    curl_setopt($ch, CURLOPT_HEADER, 1);  

    
    //echo curl_exec($ch); 

    //$obj = json_decode(curl_exec($ch));
    //echo $obj->status;
    //print_r($obj);
    if(preg_match('~"status":"1"~',curl_exec($ch)))
    {
        echo '<h1>Voting Success</h1>';
    }

   //die();       
    curl_close($ch);  

  //  }  

   //set_time_limit(120);

//