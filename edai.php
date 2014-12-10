<?php
//@header("Content-type:text/html;charset=GB2312");

include 'spidernewsapi.php';
include 'Snoopy.class.php';
include 'spiderkeyword.php';
include 'simple_html_dom.php';


//$site = 'edai';



$firsturl = array();
$firsturl['qiche']='http://www.edai.com/news/qiche/';
$firsturl['fangchan']='http://www.edai.com/news/fangchan/';
$firsturl['xinyong']='http://www.edai.com/news/xinyong/';
$firsturl['xiaoe']='http://www.edai.com/news/xiaoe/';
$firsturl['xiaofei']='http://www.edai.com/news/xiaofei/';
$firsturl['qiuxue']='http://www.edai.com/news/qiuxue/';
$firsturl['chuangye']='http://www.edai.com/news/chuangye/';
$firsturl['qiye']='http://www.edai.com/news/qiye/';
$firsturl['yinhang']='http://www.edai.com/news/yinhang/';
$firsturl['minjian']='http://www.edai.com/news/minjian/';
$firsturl['gongsi']='http://www.edai.com/news/gongsi/';
$firsturl['trz']='http://www.edai.com/news/trz/';

$today = date('Y-m-d');
//echo $today;

//die();

foreach ($firsturl as $kwkey => $kwvalue) {


		$keyword = $kwkey;
		//$url = $qurl[$site]['initurl'].$qurl[$site]['other'].'&'.$qurl[$site]['q'].'='.$keyword.'&'.$qurl[$site]['page'].'='.$page;

		$url = $kwvalue;

		//echo $url.'  ';
		//$value= 'http://search.sina.com.cn/?q=%B3%B5%B4%FB&range=all&c=news&sort=time&page=2';
		$snoopy = new Snoopy;
		$snoopy->agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';			
		$snoopy->expandlinks = true; 
		//$snoopy->rawheaders["COOKIE"] = 'ABTEST=1|1416467691|v17; SNUID=BDB2502357535F1342CD7EFB57C7BA34; IPLOC=CN4401; SUID=EAE407744C1C920A00000000546D94EB; browerV=2; osV=1; SUV=1416467813533208; sct=8; ld=kkllllllll2UbBFLlllllVSHoaolllllNlK6fkllll6lllllVllll5@@@@@@@@@@; sst0=731; LSTMV=448%2C637; LCLKINT=23203';
		//$snoopy->fetchlinks($url);
		$snoopy->fetch($url);
		//$yicailink = array_unique(preg_grep('(http://www.yicai.com/news/2014/(.*?).html)',$snoopy->results)) ;



		$tonight = array();
		$html = (string)($snoopy->results);

		$html = str_get_html($html);

		$content = '';
		foreach($html->find('font[class=list02 huise14]') as $element)
   		{
			$tonight[]=$element->innertext;
   		}

   		$num = 0; 
		$num = count(preg_grep("($today)",$tonight));


		preg_match_all("(http://www.edai.com/news/$kwkey/[\d]*.html)",(string)($snoopy->results),$initlink);

		$initlink = array_unique($initlink[0]);

		$link = array();
		foreach ($initlink as $key => $value) {
			# code...
			$link[] = $value;

		}


		//print_r($link);

		
		//die();

		if($num>0)
		{
		for ($i=0; $i<=$num-1; $i++) { 
		
			echo $kwkey;
			echo ' '.$num.' ';

			$abc = new Snoopy;
			$abc->agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';			
			$abc->expandlinks = true; 
			$abc->fetch($link[$i]);

			$html = (string)($abc->results);

			$html = str_get_html($html);
			$content = '';
			foreach($html->find('div[class=test02 huise14]') as $element)
			       $content = $content.$element->innertext; 

			foreach($html->find('h2[class=j-font huise20]') as $element)
			       $title = $element->innertext; 

			$content = strip_tags($content,'<p>');
			$content = str_replace('<p>', '<p style="text-indent:2em;"><span style="line-height:2.5;">', $content);
			$content = str_replace('</p>', '</span></p>', $content );

			$source = 'edai';
			$sourceurl = $link[$i];
			$create_time = date('Y-m-d h:i:sa');
			$release_time = '';
			$content = urlencode($content);

			//$release_time = iconv("GB2312//IGNORE","UTF-8", $time[1]);

				if (isset($content) && strlen($content)>300) {
					insert($source,$sourceurl,$create_time,$release_time,$title,$content,$kwkey);	
				}
			//die();

			$rand = rand(5, 20);
			sleep($rand);
			//die();

		}
	}

}