<?php

//$dbhost = "sql202.freevnn.com";

//$dbuser = "freev_15676079";

//$dbpass = "theanh";

//$dbname	= "freev_15676079_company";

$dbhost = "localhost";
$dbname = "zeropt";
$dbuser = "root";
$dbpass = "";
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>