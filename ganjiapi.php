<?php

// 手机，名字，地址，型号，价格

function insert($a){

	$link = mysql_connect('127.0.0.1', 'root', '123456a');
	mysql_select_db('ganji', $link);


	$sql = "INSERT  INTO `ganji` ( `phone` ) VALUES ('$a')";
	//$sql = "INSERT  INTO `qichezhijia` ( `phone`, `name` , `address` , `type`,`prie`) VALUES ('fuck','you','r','mother','kao')";

	//mysql_query('set names utf8');

	if (!mysql_query($sql,$link))
	  {
	  	echo 'Error: ' . mysql_error();
	  }

}