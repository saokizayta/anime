<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
echo '<link href="style.css" rel="stylesheet" type="text/css">';
require_once("mysql.php"); 
if ( !$_SESSION['user_id'] )
{ 
	echo "Bạn chưa đăng nhập! <a href='login.php'>Nhấp vào đây để đăng nhập</a> hoặc <a href='register.php'>Nhấp vào đây để đăng ký</a>"; 
}
else
{ 
	$user_id = intval($_SESSION['user_id']);
	$sql_query = @mysql_query("SELECT * FROM members WHERE id='{$user_id}'");
	$member = @mysql_fetch_array( $sql_query ); 
	echo "Xin chào {$member['Name']} Bạn đang đăng nhập với tài khoản {$member['username']}."; 
	echo "<br><a href='thoat.php'>Thoát ra</a> │ <a href='add-menu.php'>Thêm Menu</a> │ <a href='add-products.php'>Thêm Bài Viết</a> │ <a href='admin.php'>Quay Lại Trang Chủ</a><hr>";
	if ($member['admin']!="1")  
		echo "Bạn ko phải là admin";
	else
	{
		//Noi dung cac ham, cac lenh va code danh cho admin
		echo '<a href="show-menu.chn">[+] Sửa tất cả các mục thông tin website</a><br><br>';
		echo '<a href="show-products.chn">[+] Sửa các bài viết bao gồm: (Bảo Trì, Tin, Sự Kiện)</a><br><br>';
		//echo '<a href="show-news.chn">[+] Sửa News ( bao gồm các mục bài viết ngoài index)</a><br><br>';
	}

} 
?>