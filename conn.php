<?php
$mysql_hostname = "localhost";
$mysql_port = "80";
$mysql_user = "root";
$mysql_password = "12345678";
$mysql_database = "survey";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)
or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
mysql_query("SET NAMES `UTF8`") or $error = mysql_error();

?>