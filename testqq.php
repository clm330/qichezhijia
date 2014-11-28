<?php

include 'spidernewsapi.php';
include 'Snoopy.class.php';
include 'spiderkeyword.php';

$value = 'http://finance.qq.com/a/20141010/017305.htm';

					$snoopy = new Snoopy;
					$snoopy->agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0';			
					$snoopy->expandlinks = true; 
					$snoopy->rawheaders["COOKIE"] = 'ABTEST=1|1416467691|v17; SNUID=BDB2502357535F1342CD7EFB57C7BA34; IPLOC=CN4401; SUID=EAE407744C1C920A00000000546D94EB; browerV=2; osV=1; SUV=1416467813533208; sct=8; ld=kkllllllll2UbBFLlllllVSHoaolllllNlK6fkllll6lllllVllll5@@@@@@@@@@; sst0=731; LSTMV=448%2C637; LCLKINT=23203';
					$snoopy->fetch($value);

					$text = iconv("gb2312","utf-8//IGNORE",$snoopy->results);


					//print_r($text);

					//die();

					preg_match('(<h1>(.*)</h1>)',$text,$title);
					preg_match('([\d]{4}-[\d]{2}-[\d]{2} [\d]{2}:[\d]{2})',$text,$time);
					//preg_match('|bosszone="content">(.*?)</FOUNDER|is',$text,$content);
					preg_match('|bosszone="content">(.*?)<span style="width:0;height:0;|is',$text,$content);

					print_r($content);

					$content = strip_tags($content[0],'<p>');
					$content = str_replace('bossZone="content">', '', $content);
					$pattern = '|bosszone="content">(.*?)</FOUNDER|is';

					$source = 'QQ';
					$sourceurl = $value;
					$create_time = date('Y-m-d h:i:sa');
					//$keyword = $kwkey;
					$from = 'QQ';

					$title = $title[1];
					$release_time = $time[0];
					//insert($source,$sourceurl,$create_time,$release_time,$title,$from,$content,$keyword);

					$rand = rand(5, 20);
					sleep($rand);


