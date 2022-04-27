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
$db_host = "localhost"; // Giữ mặc định là localhost
$db_name	= 'ptvui_2022';// Can thay doi
$db_username	= 'root'; //Can thay doi
$db_password	= '';//Can thay doi
$Conn = mysqli_connect("{$db_host}", "{$db_username}", "{$db_password}") or die("Không thể kết nối database");
@mysqli_select_db("{$Conn}", "{$db_name}") or die("Không thể chọn database");
?>

<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>