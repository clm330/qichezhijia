<?php

	include 'spidernewsapi.php';
	include 'Snoopy.class.php';
	include 'spiderkeyword.php';
	include 'simple_html_dom.php';

	function urlOk($url) {
    $headers = @get_headers($url);
    if($headers[0] == 'HTTP/1.1 200 OK') return true;
    else return false;
	}

	function findNum($str=''){
	    $str=trim($str);
	    if(empty($str)){return '';}
	    $result='';
	    for($i=0;$i<strlen($str);$i++){
	        if(is_numeric($str[$i])){
	            $result.=$str[$i];
	        }
	    }
	    return $result;
	}

	for ($num=800; $num < 1400; $num++) { 
		$value = 'http://homeshenzhen.com/master/detail-'.$num.'.html';
		if(urlOk($value))
		{
		$html  = file_get_html( $value );  

		//票数和提取票数
		foreach($html->find('span[class=master-votecount]') as $element)
		{
		    $votecount = $element->innertext; 
		    if(findNum($votecount)>1000)
		    {
				foreach($html->find('title') as $element)
				{
				       echo $content = $element->innertext;
				       echo '           ';
				}

				foreach($html->find('h2[class=am-box-noicon-text-master]') as $element)
				{
				       echo $content = $element->innertext;
				       echo '           ';
				}

				echo $votecount; 
				echo '<br />';
		    }

			
		}



		}
	}


die();




    function GetHttpStatusCode($url){ 
         $curl = curl_init();
         curl_setopt($curl,CURLOPT_URL,$url);//获取内容url 
         curl_setopt($curl,CURLOPT_HEADER,1);//获取http头信息 
         curl_setopt($curl,CURLOPT_NOBODY,1);//不返回html的body信息 
         curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);//返回数据流，不直接输出 
         curl_setopt($curl,CURLOPT_TIMEOUT,30); //超时时长，单位秒 
         curl_exec($curl);
         $rtn= curl_getinfo($curl,CURLINFO_HTTP_CODE);
         curl_close($curl);
         return  $rtn;
     }
     $url="http://homeshenzhen.com/master/detail-1080.html";
     echo GetHttpStatusCode($url);  


die();


	for ($num=1000; $num < 1100; $num++) { 
		# code...
		echo $url = 'http://homeshenzhen.com/master/detail-'.$num.'.html';
		echo GetHttpStatusCode($url).'<br />';
    	if(GetHttpStatusCode($url)==200)
    		echo $url = 'http://homeshenzhen.com/master/detail-'.$num.'.html   ';
    	// die();

	}

