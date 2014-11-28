<?php

	$header = 'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 8_1_1 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Mobile/12B435 MicroMessenger/6.0.1 NetType/WIFI';


/*ASP.NET_SessionId=tf3tn0hjbti2ldzqxci2frhs;
 CNZZDATA5855278=cnzz_eid%3D682376299-1415954638-%26ntime%3D1416884942;
  Vote.HasVote.11549=2014/11/14 18:10:30;
	 Vote.HasVote.13457=2014/11/26 15:56:40;
 safedog-flow-item=BAD4407E4430246220F7C8BEDA*/




$cook = array('ASP.NET_SessionId' => , );


       $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0); // 返回字符串，而非直接输出
        curl_setopt($ch, CURLOPT_HEADER, ture);   // 不返回header部分
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);   // 设置socket连接超时时间
        if (!empty($referer))
        {
            curl_setopt($ch, CURLOPT_REFERER, $referer);   // 设置引用网址
        }
            //curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);   // 设置从$cookie所指文件中读取cookie信息以发送
            curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);   // 设置将返回的cookie保存到$cookie所指文件
 
        else if (is_string($data))
        {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            // POST
        }
        else if (is_array($data))
        {
            // POST
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        }
        set_time_limit(120); // 设置自己服务器超时时间
        $str = curl_exec($ch);
        curl_close($ch);