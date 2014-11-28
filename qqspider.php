<?php

include 'spidernewsapi.php';
include 'Snoopy.class.php';
include 'spiderkeyword.php';
include 'simple_html_dom.php';


	foreach ($keyword as $kwkey => $kwvalue) {

		for($page=1;$page<=5;$page++){

			$qqurl = $qurl['QQ']['initurl'].'&'.$qurl['QQ']['other'].'&'.$qurl['QQ']['q'].'='.$kwvalue.'&'.$qurl['QQ']['page'].'='.$page;
			$snoopy = new Snoopy;
			$snoopy->agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';			
			$snoopy->expandlinks = true; 
			$snoopy->rawheaders["COOKIE"] = 'ABTEST=1|1416467691|v17; SNUID=C3CD2F5D292C21844124245029AADFD0; IPLOC=CN4401; SUID=EAE407744C1C920A00000000546D94EB; browerV=2; osV=1; SUV=1416467813533208; sct=8; ld=Gkllllllll2UbBFLlllllVS1z8olllllNlK6fkllllwlllllpylll5@@@@@@@@@@; usid=n8kVftzmApv_9vdc; LSTMV=346%2C418; LCLKINT=4414';
			$snoopy->fetchlinks($qqurl);

			$qqlink = array_unique(preg_grep('(http://finance.qq.com/a/[0-9]+/[0-9]+.htm)',$snoopy->results)) ;

			$rand = rand(5, 10);
			sleep($rand);
			//print_r($qqlink);

			foreach ($qqlink as $key => $value) {

				//test
				//$value = 'http://finance.qq.com/a/20141127/009970.htm';


				$snoopy = new Snoopy;
				$snoopy->agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';			
				$snoopy->expandlinks = true; 
				$snoopy->rawheaders["COOKIE"] = 'pgv_pvid=4710188958; ts_uid=6614424493; pgv_info=ssid=s8438719425; ad_play_index=26; ts_last=finance.qq.com/; ts_refer=www.qq.com/; _as_crazy3702=2014-11-25-1-';
				$snoopy->fetch($value);

				$text = iconv("gb2312","utf-8//IGNORE",$snoopy->results);


				$html = (string)($text);

				$html = str_get_html($html);

				// foreach($html->find('div[id=Cnt-Main-Article-QQ]') as $element)
				//        $content = $element->innertext; 

				$content = '';
				foreach($html->find('p[style=TEXT-INDENT: 2em]') as $element)
			   		{
			   			$content = $content.'<p style="text-indent:2em;"><span style="line-height:2.5;">'.strip_tags($element->innertext).'</span></p>';

			   		}

			   	//echo $content;

				foreach($html->find('h1') as $element)
				       $title = $element->innertext; 

				foreach($html->find('span[class=pubTime article-time]') as $element)
				       $release_time = $element->innertext; 

				//die();

				$content = urlencode($content);

				$source = 'QQ';
				$sourceurl = $value;
				$create_time = date('Y-m-d h:i:sa');
				

				if (isset($content) && strlen($content)>300) {

					insert($source,$sourceurl,$create_time,$release_time,$title,$content,$kwkey);
				}

				//die();
				$rand = rand(5, 20);
				sleep($rand);

			}

		}

	}