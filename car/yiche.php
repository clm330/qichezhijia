<?php
	include('Snoopy.class.php');
	echo "<pre>";
	$snoopy = new Snoopy;
	$snoopy->host = 'http://www.taoche.com/buycar/p-4973309.html';
	$snoopy-> fetchtext($snoopy->host); //获取所有文本内容（去掉html代码）


	//$snoopy->fetch($snoopy->host); //获取页面所有链接
	$snoopy->fetchlinks($snoopy->host); //获取页面所有链接
	//$snoopy->fetchlinks($snoopy->host); //获取链接   
	//$snoopy->fetchform($snoopy->host);  //获取表单  
	print_r($snoopy->results);


	// $a = preg_grep('(http://www.taoche.com/buycar/b-Dealer)', $snoopy->results);
	// $b = preg_grep('(http://www.taoche.com/buycar/p-)', $snoopy->results);


	// $mergeab = array_merge($a,$b);
	// print_r($mergeab);


	die();

	$first=array();
	$first[] = "http://shenzhen.taoche.com/buycar/p1gesbxcdza/?onsale=1";
	$first[] = "http://shenzhen.taoche.com/buycar/p2gesbxcdza/?onsale=1";
	$first[] = "http://shenzhen.taoche.com/buycar/p3gesbxcdza/?onsale=1";
	$first[] = "http://shenzhen.taoche.com/buycar/p4gesbxcdza/?onsale=1";
	$first[] = "http://shenzhen.taoche.com/buycar/p5gesbxcdza/?onsale=1";
	$first[] = "http://shenzhen.taoche.com/buycar/p6gesbxcdza/?onsale=1";
	$first[] = "http://shenzhen.taoche.com/buycar/p7gesbxcdza/?onsale=1";
	$first[] = "http://shenzhen.taoche.com/buycar/p8gesbxcdza/?onsale=1";
	$first[] = "http://shenzhen.taoche.com/buycar/p9gesbxcdza/?onsale=1";
	$first[] = "http://shenzhen.taoche.com/buycar/p10gesbxcdza/?onsale=1";

	$second = array();

	foreach ($first as $key => $value) {
		# code...
		$second = $first[$key].'&page=';
		for($i=1;$i<=70;$i++){
			$third = $second.$i;
			echo '<pre>';
			echo $third;
			$snoopy = new Snoopy;
			$snoopy->host = $third;
			$snoopy->fetchlinks($snoopy->host); //获取页面所有链接
			//print_r($snoopy->results);
			$a = preg_grep('(http://www.taoche.com/buycar/b-Dealer)', $snoopy->results);
			$b = preg_grep('(http://www.taoche.com/buycar/p-)', $snoopy->results);
			$mergeab = array_merge($a,$b);

			foreach ($mergeab as $key => $value) {


				# code...
			}

		}

	}
