<?php

function insert($source,$sourceurl,$create_time,$release_time,$title,$content,$keyword)
{
	$con = mysql_connect("127.0.0.1","root","123456");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("diyifangdai", $con);
	
	$content = mysql_escape_string($content);

	$sql = "INSERT INTO fd_spider_news (source,sourceurl,create_time,release_time,title,content,keyword) VALUES ('$source','$sourceurl','$create_time','$release_time','$title','$content','$keyword')";

	$searchsql = "SELECT sourceurl FROM fd_spider_news where sourceurl = '$sourceurl'";
	$searchtitle = "SELECT title FROM fd_spider_news where title = '$title'";

	$result = mysql_num_rows(mysql_query($searchsql));
	$titleres = mysql_num_rows(mysql_query($searchtitle));

	// echo $searchsql.'      ';
					//echo $result;

	// echo 'result is'.$result.'</ br>';

	if($result == 0 && $titleres == 0){

		mysql_query("set names utf8");
		
		// echo $sql;die;

		if (!mysql_query($sql,$con))
		{
		  	echo 'Error: ' . mysql_error();
		}
		else
		{
			echo 'ok!   ';
		}
	}
}
