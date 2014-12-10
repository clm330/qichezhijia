<?php
$url = "http://homeshenzhen.com/Master/SendVote/?Id=1081";
 
// $post = array(
//     'xx' =>xx,
//     'xx'=>'xxx'
// );
$userAgent =  getUserAgent();
 
$headers = array();
$headers['CLIENT-IP'] = getRandomIp();
$headers['X-FORWARDED-FOR'] = getRandomIp();
 
$headerArr = array();
foreach( $headers as $n => $v ) {
    $headerArr[] = $n .':' . $v;
}
 
$ch      = curl_init();
$options = array(
   CURLOPT_URL => $url,
   CURLOPT_POST => 0,
   CURLOPT_RETURNTRANSFER => true,
   //CURLOPT_POSTFIELDS => $post,
   CURLOPT_HTTPHEADER =>$headerArr,
   CURLOPT_USERAGENT=>$userAgent
);
curl_setopt_array($ch, $options);
$t = curl_exec($ch);
curl_close($ch);
 
$url = "http://homeshenzhen.com/master/detail-1081.html?from=timeline&isappinstalled=0";
$userAgent =  getUserAgent();
 
$headers = array();
$headers['CLIENT-IP'] = getRandomIp();
$headers['X-FORWARDED-FOR'] = getRandomIp();
 
$headerArr = array();
foreach( $headers as $n => $v ) {
    $headerArr[] = $n .':' . $v;
}
 
$ch      = curl_init();
$options = array(
   CURLOPT_URL => $url,
   CURLOPT_POST => 1,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_HTTPHEADER =>$headerArr,
   CURLOPT_USERAGENT=>$userAgent
);
curl_setopt_array($ch, $options);
$t = curl_exec($ch);
curl_close($ch);
 
function getRandomIp(){
    $ip_long = array(
 
                array('607649792', '608174079'), //36.56.0.0-36.63.255.255
 
                array('1038614528', '1039007743'), //61.232.0.0-61.237.255.255
 
                array('1783627776', '1784676351'), //106.80.0.0-106.95.255.255
 
                array('2035023872', '2035154943'), //121.76.0.0-121.77.255.255
 
                array('2078801920', '2079064063'), //123.232.0.0-123.235.255.255
 
                array('-1950089216', '-1948778497'), //139.196.0.0-139.215.255.255
 
                array('-1425539072', '-1425014785'), //171.8.0.0-171.15.255.255
 
                array('-1236271104', '-1235419137'), //182.80.0.0-182.92.255.255
 
                array('-770113536', '-768606209'), //210.25.0.0-210.47.255.255
 
                array('-569376768', '-564133889'), //222.16.0.0-222.95.255.255
 
    );
 
    $rand_key = mt_rand(0, 9);
 
    $ip= long2ip(mt_rand($ip_long[$rand_key][0], $ip_long[$rand_key][1]));
    return $ip;
}
function getUserAgent(){
    $userAgentsList = array(
        "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.11 TaoBrowser/2.0 Safari/536.11",//taobao
        "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.71 Safari/537.1 LBBROWSER",//liebao
        "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; QQBrowser/7.0.3698.400) ",//QQ
        "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; SV1; QQDownload 732; .NET4.0C; .NET4.0E; 360SE) ",//360
        "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1",//
        "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.84 Safari/535.11 SE 2.X MetaSr 1.0",//sougou
        "Mozilla/5.0 (iPad; U; CPU OS 4_2_1 like Mac OS X; zh-cn) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148 Safari/6533.18.5",//ipad
        "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0)",
        "Mozilla/5.0 (Linux; U; Android 2.2.1; zh-cn; HTC_Wildfire_A3333 Build/FRG83D) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1"
    );
    return $userAgentsList[rand(0,count($userAgentsList)-1)];
}