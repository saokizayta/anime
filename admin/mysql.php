<?php

// $dbhost = "localhost";//$dbhost = "sql202.byetcluster.com"; // $dbhost = "localhost";

// $dbuser = "root";//$dbuser = "freev_15676079"; // $dbuser = "root";

// $dbpass = "";//$dbpass = "theanh"; // $dbpass = "";

// $dbname	= "ptvui_2022";//$dbname	= "freev_15676079_ptv"; // $dbname	= "datapt";
// error_reporting(E_ALL & ~E_NOTICE);

// $coon = mysqli_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
// @mysqli_select_db($conn, $dbname);
?>
<?php
$dbhost = "localhost";//$dbhost = "sql202.byetcluster.com"; // $dbhost = "localhost";
$dbuser = "root";//$dbuser = "freev_15676079"; // $dbuser = "root";
$dbpass = "";//$dbpass = "theanh"; // $dbpass = "";
$dbname	= "ptvui_2022";//$dbname	= "freev_15676079_ptv"; // $dbname	= "datapt";
error_reporting(E_ALL & ~E_NOTICE);

$coon = mysqli_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
@mysqli_select_db($conn, $dbname);
?>

