<?php
//@header("Content-type:text/html;charset=GB2312");

include 'spidernewsapi.php';
include 'Snoopy.class.php';
include 'spiderkeyword.php';
include 'simple_html_dom.php';


$site = 'YICAI';

foreach ($keyword as $kwkey => $kwvalue) {

	for($page=1;$page<=5;$page++){

		$keyword = $kwvalue;
		$url = $qurl[$site]['initurl'].$qurl[$site]['other'].'&'.$qurl[$site]['q'].'='.$keyword.'&'.$qurl[$site]['page'].'='.$page;


		//echo $url.'  ';
		//$value= 'http://search.sina.com.cn/?q=%B3%B5%B4%FB&range=all&c=news&sort=time&page=2';
		$snoopy = new Snoopy;
		$snoopy->agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';			
		$snoopy->expandlinks = true; 
		//$snoopy->rawheaders["COOKIE"] = 'ABTEST=1|1416467691|v17; SNUID=BDB2502357535F1342CD7EFB57C7BA34; IPLOC=CN4401; SUID=EAE407744C1C920A00000000546D94EB; browerV=2; osV=1; SUV=1416467813533208; sct=8; ld=kkllllllll2UbBFLlllllVSHoaolllllNlK6fkllll6lllllVllll5@@@@@@@@@@; sst0=731; LSTMV=448%2C637; LCLKINT=23203';
		//$snoopy->fetchlinks($url);
		$snoopy->fetch($url);
		//$yicailink = array_unique(preg_grep('(http://www.yicai.com/news/2014/(.*?).html)',$snoopy->results)) ;

		$yicailink = (string)($snoopy->results);
		$yicailink = str_get_html($yicailink);

		foreach($yicailink->find('h2') as $element)
		{
		       echo $content = $element->innertext;
		       //echo $content = $element->link_nodes;
		}


		echo $url;
		//print_r($content);
		die();


			foreach ($sinalink as $key => $value) {


				$snoopy = new Snoopy;
				$snoopy->agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';			
				$snoopy->expandlinks = true; 
				$snoopy->fetch($value);

				$html = (string)($snoopy->results);

				$html = str_get_html($html);

				foreach($html->find('div[id=artibody]') as $element)
				       $content = $element->innertext; 

				foreach($html->find('h1[id=artibodyTitle]') as $element)
				       $title = $element->innertext; 

				foreach($html->find('span[id=pub_date]') as $element)
				       $release_time = $element->innertext; 




				$title = iconv("GB2312//IGNORE","UTF-8", $title);
				$release_time = iconv("GB2312//IGNORE","UTF-8", $release_time);

				$content = str_replace('&nbsp;', '', $content );
				$content = strip_tags($content,'<p>');
				
				$content = urlencode($content);
//				$content = str_replace('&nbsp;', '', $content );

				$release_time = str_replace('&nbsp;', '', $release_time);
				$release_time = str_replace('<br>', '', $release_time);
				$title = str_replace('<br>', '', $title);


				// echo $release_time;
				// echo $title;
				// echo $content;


				// if ( preg_match('(http://finance)', $value)) {
				// 	preg_match('(<h1 id="artibodyTitle" pid="[\d]+" tid="[\d]+" did="[\d]+" fid="[\d]{4}">(.*)</h1>)',$text,$title);
				// 	preg_match('(<span id="pub_date">(.*)</span>)',$text,$time);
				// 	preg_match('| id="artibody">(.*?)<div class="content_line"></div>|is',$text,$content);
				// 	$content = strip_tags($content[0],'<p>');
				// 	$content = str_replace('id="artibody">', '', $content);

				// }


				// if (preg_match('(http://news)', $value)) {
				// 	preg_match('(<h1 id="artibodyTitle" pid="[\d]+" tid="[\d]+" did="[\d]+" fid="[\d]{4}">(.*)</h1>)',$text,$title);
				// 	preg_match('(<span class="time-source">[\s|\r|\n|\r\n]+(.*)[\s|\r|\n|\r\n]+<span data-sudaclick="media_name">)',$text,$time);
				// 	preg_match('| id="artibody">(.*?)<div class="content_line"></div>|is',$text,$content);		
				// 	$content = strip_tags($content[0],'<p>');
				// 	$content = str_replace(' id="artibody">', '', $content);
				// 	$content = str_replace('"article', '', $content);
				// }

				// echo $value;
				// echo $content;
				// echo $title[1];
				//die();

				// $content = iconv("GB2312//IGNORE","UTF-8", $content);
				// $title = iconv("GB2312//IGNORE","UTF-8", $title[1]);

				$source = 'SINA';
				$sourceurl = $value;
				$create_time = date('Y-m-d h:i:sa');
				//$from = 'SINA';

				//die();

				//$release_time = iconv("GB2312//IGNORE","UTF-8", $time[1]);
				if (isset($content)) {
					insert($source,$sourceurl,$create_time,$release_time,$title,$content,$kwkey);	
				}
				//die();

				$rand = rand(5, 20);
				sleep($rand);

			}


	}
}