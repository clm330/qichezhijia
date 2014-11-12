<?php

    	function insert($a,$b,$c,$d,$e){

			$link = mysql_connect('127.0.0.1', 'root', '123456a');
			mysql_select_db('focus', $link);

			$sql = "INSERT  INTO `focus` ( `name`, `tel` , `com` , `city`,`dist`) VALUES ('$a','$b','$c','$d','$e')";
			if (!mysql_query($sql,$link))
			  {
			  echo 'Error: ' . mysql_error();
			  }

    	}