<?php
$db_host = "localhost"; // Giữ mặc định là localhost
$db_name	= 'ptvui_2022';// Can thay doi
$db_username	= 'root'; //Can thay doi
$db_password	= '';//Can thay doi
@mysqli_connect("{$db_host}", "{$db_username}", "{$db_password}") or die("Không thể kết nối database");
@mysqli_select_db("{$db_name}") or die("Không thể chọn database");
?>