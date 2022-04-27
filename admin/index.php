<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
echo '<title>SinhVienIT.Net - Homepage (Huong Dan tao trang dang ki/Dang Nhap)</title>';
include("mysql.php"); 
if ( !$_SESSION['user_id'] )
{ 
	echo "Bạn chưa đăng nhập! <a href='login.php'>Nhấp vào đây để đăng nhập</a> hoặc <a href='register.php'>Nhấp vào đây để đăng ký</a>"; 
}
else
{
	$user_id = intval($_SESSION['user_id']);
	$sql_query = @mysql_query("SELECT * FROM members WHERE id='{$user_id}'");
	$member = @mysql_fetch_array( $sql_query ); 
	echo "Bạn đang đăng nhập với tài khoản {$member['username']}."; 
	echo "<br><a href='suathongtin.php'>Sửa thông tin</a>";
	if ($member['admin']=="1")  echo "<br><a href='admin.php'>Trang quản trị</a>";
	echo "<br><a href='thoat.php'>Thoát ra</a>";
} 
?>