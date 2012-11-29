<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "one3moto";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("cannot connect to mysql");
mysql_select_db($mysql_database, $bd) or die("cannot connect to database");

?>