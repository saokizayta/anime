<?php

$dbhost = "localhost";//$dbhost = "sql202.byetcluster.com"; // $dbhost = "localhost";

$dbuser = "root";//$dbuser = "freev_15676079"; // $dbuser = "root";

$dbpass = "";//$dbpass = "theanh"; // $dbpass = "";

$dbname	= "ptvui_2019";//$dbname	= "freev_15676079_ptv"; // $dbname	= "datapt";


$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>