<?php
$user='root';
$password='12345678';
$db='survey';
$host='localhost';
$port=80;

$link=mysql_connect(
"$host:$port",
$user,
$password
);

$db_selected=mysql_select_db(
$db,
$link
);
?>