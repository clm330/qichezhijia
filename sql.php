<?php

// 手机，名字，地址，型号，价格

function insert($a,$b,$c,$d,$e){

	// echo $a;
	// echo $b;
	// echo $c;
	// echo $d;
	// echo $e;

	$link = mysql_connect('127.0.0.1', 'root', '123456a');
	mysql_select_db('qichezhijia', $link);

	echo $a;
	echo $b;
	echo $c;
	echo $d;
	echo $e;


	$sql = "INSERT  INTO `qichezhijia` ( `phone`, `name` , `address` , `type`,`prie`) VALUES ('$a','$b','$c','$d','$e')";
	$sql = "INSERT  INTO `qichezhijia` ( `phone`, `name` , `address` , `type`,`prie`) VALUES ('fuck','you','r','mother','kao')";
	
	echo 'sql='.$sql;

	if (!mysql_query($sql,$link))
	  {
	  	echo 'Error: ' . mysql_error();
	  }

}