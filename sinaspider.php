<?php
//@header("Content-type:text/html;charset=GB2312");

include 'spidernewsapi.php';
include 'Snoopy.class.php';
include 'spiderkeyword.php';
include 'simple_html_dom.php';


foreach ($keyword as $kwkey => $kwvalue) {

	for($page=1;$page<=1;$page++){

		$keyword = urlencode(iconv("UTF-8","GB2312//IGNORE", $kwvalue));
		$sinaurl = $qurl['SINA']['initurl'].$qurl['SINA']['other'].'&'.$qurl['SINA']['q'].'='.$keyword.'&'.$qurl['SINA']['page'].'='.$page;
		//echo $sinaurl.'  ';
		//$value= 'http://search.sina.com.cn/?q=%B3%B5%B4%FB&range=all&c=news&sort=time&page=2';
		$snoopy = new Snoopy;
		$snoopy->agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';			
		$snoopy->expandlinks = true; 
		//$snoopy->rawheaders["COOKIE"] = 'ABTEST=1|1416467691|v17; SNUID=BDB2502357535F1342CD7EFB57C7BA34; IPLOC=CN4401; SUID=EAE407744C1C920A00000000546D94EB; browerV=2; osV=1; SUV=1416467813533208; sct=8; ld=kkllllllll2UbBFLlllllVSHoaolllllNlK6fkllll6lllllVllll5@@@@@@@@@@; sst0=731; LSTMV=448%2C637; LCLKINT=23203';
		$snoopy->fetchlinks($sinaurl);
		$sinalink = array_unique(preg_grep('(http://((finance)|(auto)|(news)|()).sina.com.cn/(.*?).shtml)',$snoopy->results));

			foreach ($sinalink as $key => $value) {


				//$value = 'http://news.sina.com.cn/o/2014-11-28/113531217355.shtml';
				$snoopy = new Snoopy;
				$snoopy->agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';			
				$snoopy->expandlinks = true; 
				$snoopy->fetch($value);

				$html = (string)($snoopy->results);
				$html = str_get_html($html);
				foreach($html->find('div[id=artibody]') as $element)
				       $content = $element->innertext; 
//die();
				foreach($html->find('h1[id=artibodyTitle]') as $element)
				       $title = $element->innertext; 

				
				if(preg_match('~'.'http://finance.'.'~', $value))
				{
					foreach($html->find('span[id=pub_date]') as $element)
					    $release_time = $element->innertext; 

				}

				if(preg_match('~'.'http://news.'.'~', $value))
				{
					foreach($html->find('span[class=time-source]') as $element)
					{
					    $release_time = substr($element->innertext,0,28); 

					    //echo $release_time;
	    				$content = iconv("GB2312//IGNORE","UTF-8", $content);
	    			}

				}


				//die();


				$content = str_replace('&nbsp;', '', $content );
				$content = strip_tags($content,'<p>');
				$content = str_replace('<p>', '<p style="text-indent:2em;"><span style="line-height:2.5;">', $content );
				$content = str_replace('</p>', '</span></p>', $content );
				$content = urlencode($content);

				$release_time = iconv("GB2312//IGNORE","UTF-8", $release_time);
				$release_time = str_replace('&nbsp;', '', $release_time);
				$release_time = str_replace('<br>', '', $release_time);

				$title = iconv("GB2312//IGNORE","UTF-8", $title);
				
				$title = str_replace('<br>', '', $title);
				$title = str_replace('Q&A', '', $title);




				$source = 'SINA';
				$sourceurl = $value;
				$create_time = date('Y-m-d h:i:sa');



				$kwmatch = '~'.urlencode($kwvalue).'~';
				$titlematch = urlencode($title);
				if(preg_match($kwmatch,$titlematch))
				{

				//$release_time = iconv("GB2312//IGNORE","UTF-8", $time[1]);
					if (isset($content) && strlen($content)>300) {
						insert($source,$sourceurl,$create_time,$release_time,$title,$content,$kwkey);	
					}
				//die();

				}

				$rand = rand(5, 20);
				sleep($rand);

			}


	}
}