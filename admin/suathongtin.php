<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
echo '<title>SinhVienIT.Net - Sua thong tin ca nhan (Huong Dan tao trang dang ki/Dang Nhap)</title>';
echo '<a href="index.php">Bấm vào đây để quay lại<br></a>';
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
	//----Noi dung thong bao sau khi sua
	$thanhcong='Sửa thành công <a href="index.php">Quay lại</a>';
	$kothanh='Sửa ko thành công';
	echo "<b>Đang Sửa tài khoản {$member['username']}</b>.<br>"; 
		
		
		
	if ($_GET['do']=="sua") {
		$ten = addslashes( $_POST['name'] );
		$pass = md5( addslashes( $_POST['pass'] ) );
		$sn = addslashes( $_POST['sn'] );
		$url = addslashes( $_POST['url'] );
		$email = addslashes( $_POST['email'] );
		$sql="
		UPDATE `members` SET
		`email` = '".$email."',
		`URLS` = '".$url."',
		`Name` = '".$ten."',
		`Birthday` = '".$sn."' WHERE `id` =$user_id LIMIT 1 ;";
		
		
		if ($sua=mysql_query($sql))
			echo $thanhcong;
		else
			echo $kothanh;
			
		if ($_POST['pass']!="") {
			$sqlx="UPDATE `members` SET `password` = '".$pass."' WHERE `id` = '$user_id' LIMIT 1 ;";
			$suapass=mysql_query($sqlx);
			if ($suapass) 
				echo "(Đã đổi pass) ";
			else
				echo "(Chưa đổi pass) ";
		}
	}
	else
		echo"
		<form method='POST' action='?do=sua'>
			<table border='1' width='100%' id='table1' cellspacing='0' cellpadding='0' style='border-collapse: collapse' bordercolor='#C0C0C0'>
				<tr>
					<td>Tên:</td>
					<td><input type='text' value='{$member['Name']}' name='name' size='20'></td>
				</tr>
				<tr>
					<td>URL:</td>
					<td><input type='text' value='{$member['URLS']}' name='url' size='20'></td>
				</tr>
				<tr>
					<td>Sinh Nhật:</td>
					<td><input type='text' name='sn' value='{$member['Birthday']}' size='20'></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type='text' name='email' value='{$member['email']}' size='20'></td>
				</tr>
				<tr>
					<td>Pass:</td>
					<td><input type='password' name='pass' size='20'></td>
				</tr>
			</table>
			<p align='center'><input type='submit' value='Sửa'><input type='reset' value='Khôi phục' name='B2'></p>
		</form>
		";
} 
?>