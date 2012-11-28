<?php
	 $con = mysql_connect("localhost", "root", "");
	 if (!$con){
		 die ("Cannot connect to " . mysql_error());
	 }
	 mysql_select_db("bursaKost", $con);
?>