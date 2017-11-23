<?php
$username = "root"; //mysql username
$password = "pass"; //mysql password
$hostname = "localhost"; //hostname
$databasename = "employee"; //databasename

$connecDB = mysql_connect($hostname, $username, $password)or die('could not connect to database');
mysql_select_db($databasename,$connecDB);
?>