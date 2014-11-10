<?php
require 'sql.php';

function getdata(){
	//$finalurl = 'http://www.che168.com/dealer/139108/3607134.html';
	$finalurl = 'http://www.che168.com/personal/3677463.html';
	$UserAgent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $finalurl);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
	$content = curl_exec($curl);
   	preg_match_all('(<span class="font30">(.*)</span>)',$content,$price);
   	preg_match_all('(<span class="font22">(.*)</span>)', $content, $phone);
   	preg_match_all('(<h2 title="(.*)">)', $content, $carinfo);
   	preg_match_all('(<div>(.*)</div><div>(.*)<i class="icon-adress"></i></div>)', $content, $address);

   	// echo '<pre>'.print_r($carinfo[1][0],1).'</pre>';   	
   	// echo '<pre>'.print_r($price[0][0],1).'</pre>';
   	// echo '<pre>'.print_r($phone[0][0],1).'</pre>';
   	// echo '<pre>'.print_r($address[1][0],1).'</pre>';
   	// echo '<pre>'.print_r($address[2][0],1).'</pre>';

	// 手机，名字，地址，型号，价格

   	$xinghao = $carinfo[1][0];   
   	$jiage = $price[0][0];
   	$shouji = $phone[0][0];
   	$mingzi = $address[1][0];
   	$dizhi = $address[2][0];


   	echo $xinghao.'<br />';
   	echo $jiage.'<br />';
   	echo $shouji.'<br />';
   	echo $mingzi.'<br />';
   	echo $dizhi.'<br />';


	insert($phone[0][0],$address[1][0],$address[2][0],$carinfo[1][0],$price[0][0]);

}

getdata();
