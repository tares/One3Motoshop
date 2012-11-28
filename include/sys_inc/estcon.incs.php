<?php
	 $con = mysql_connect("localhost", "k9606299_admin", "padidankapas11");
	 if (!$con){
		 die ("Cannot connect to " . mysql_error());
	 }
	 mysql_select_db("k9606299_bursaKost", $con);
?>