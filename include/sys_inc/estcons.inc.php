<?php
	 $con = mysql_connect("localhost", "k8071319_admin", "admin1");
	 if (!$con){
		 die ("Cannot connect to " . mysql_error());
	 }
	 mysql_select_db("k8071319_one3Motoshop", $con);
?>