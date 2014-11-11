<?php
	include('58api.php');	
	include('Snoopy.class.php');
	//echo "<pre>";
	// $snoopy = new Snoopy;
	// $snoopy->host = 'http://sz.58.com/ershoufang/19218421723906x.shtml';
	// //$snoopy-> fetchtext($snoopy->host); //获取所有文本内容（去掉html代码）


	// $snoopy->fetch($snoopy->host); //获取页面所有链接
	// //$snoopy->fetchlinks($snoopy->host); //获取页面所有链接
	// //$snoopy->fetchlinks($snoopy->host); //获取链接   
	// //$snoopy->fetchform($snoopy->host);  //获取表单  
	// //print_r($snoopy->results);


	// $a = preg_grep('(<a rel="nofollow" href="http://my.58.com/[0-9]+/">(.*)</a>)', $snoopy->results);
	// // $b = preg_grep('(http://sz.58.com/ershoufang/[0-9]+x.shtml)', $snoopy->results);

	// preg_match_all('(<[0-9]{3} [0-9]{4} [0-9]{4}")',$snoopy->results,$morelist);

	// print_r($morelist);
	// //$mergeab = array_merge($a,$b);
	// //print_r($mergeab);



	// $initurl='http://sz.58.com/ershoufang/19218421723906x.shtml';
	// $UserAgent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';
	// $curl = curl_init();
	// curl_setopt($curl, CURLOPT_REFERER, 'http://sz.58.com/');
	// curl_setopt($curl, CURLOPT_URL, $initurl);
	// curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
	// curl_setopt($curl, CURLOPT_AUTOREFERER, true); 
	// curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
	// $content = curl_exec($curl);


	// preg_match_all('(<span style="font-size: 26px; font-weight: bold;" class="arial c_ff4200" id="t_phone">[\s\r|\n|\r\n]*(.*)[\s\r|\n|\r\n]*</span>)',$content,$phone);
	// print_r($phone[1][0]);
	// preg_match_all('(href=\"http://my.58.com/[0-9]+/\">(.*)</a>)',$content,$name);
	// print_r($name[1][0]);
	//die();

	$first=array();
	$http = 'http://sz.58.com/ershoufang/pn' ;

	for($i=1;$i<=70;$i++)
	{
		$first[] = $http.$i;
		//echo $first[];
	}

	foreach ($first as $key => $value) {
		# code...
		$snoopy = new Snoopy;
		$snoopy->host = $first[$key];
		$snoopy->fetchlinks($snoopy->host); //获取页面所有链接
		$a = preg_grep('(http://jump.zhineng.58.com/)', $snoopy->results);
		$b = preg_grep('(http://sz.58.com/ershoufang/[0-9]+x.shtml)', $snoopy->results);
		$mergeab = array_merge($a,$b);

		$mergeab = array_unique($mergeab);
		//print_r($mergeab);
		echo $first[$key];
		foreach ($mergeab as $key => $value) {
			# code...
			$initurl=$mergeab[$key];
			$UserAgent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_REFERER, 'http://sz.58.com/');
			curl_setopt($curl, CURLOPT_URL, $initurl);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
			curl_setopt($curl, CURLOPT_AUTOREFERER, true); 
			curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
			$content = curl_exec($curl);

			echo $mergeab[$key].'           ';



			preg_match_all('(<span style="font-size: 26px; font-weight: bold;" class="arial c_ff4200" id="t_phone">[\s\r|\n|\r\n]*(.*)[\s\r|\n|\r\n]*</span>)',$content,$phone);
			//print_r($phone[1][0]);
			preg_match_all('(href=\"http://my.58.com/[0-9]+/\">(.*)</a>)',$content,$name);
			//print_r($name[1][0]);
			insert($phone[1][0],$name[1][0]);

		}

	}


