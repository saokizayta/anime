<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
echo '<link href="style.css" rel="stylesheet" type="text/css">';
echo ' <link href="editor/sample.css" rel="stylesheet" type="text/css" />
 <script src="editor/sample.js" type="text/javascript"></script>
 <script src="editor/ckeditor.js" type="text/javascript"></script>';
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
	echo "Xin chào {$member['name']} Bạn đang đăng nhập với tài khoản {$member['username']}."; 
	echo "<br><a href='thoat.php'>Thoát ra</a><hr>";
	if ($member['admin']!="1")  
		echo "Bạn ko phải là admin";
	else
	{
		

		//Noi dung cac ham, cac lenh va code danh cho admin
		include('connect.php');	
			mysql_query("set names 'utf8'");
			$id=$_GET['id'];
			$query1 = " SELECT * FROM `pristontale` where id='$id'";
			mysql_query("set names 'utf8'");
			$result = mysql_query($query1);
			
			


					while($row = mysql_fetch_array($result))
	

				{    
  
  echo '<form id="form1" name="form1" method="post" action="update/menu.php?id='.$row['id'].'">';

  

echo '<!--readonly="readonly"-->';
echo '<font color="#FFFFFF">';

echo'Tiêu đề:<br><input type="text" name="tieude"  value="'.$row['tieude'].'"><p>';
 echo 'Tóm tắt:<br><textarea name="noidung"  " class="ckeditor" cols="40" rows="6">'.$row['noidung'].'</textarea><p>';
  
//echo 'Nội dung:<br><textarea name="menunoidung" class="ckeditor" cols="40" rows="6">'.$row['menunoidung'].'</textarea><p>';
//echo 'Url hình:<br><input type="text" name="menuimages" value="'.$row['menuimages'].'"><p>';
  
//echo 'Date:<br><textarea name="menudate" cols="40" rows="6">'.$row['menudate'].'</textarea><p>';
 
 echo '<input type="hidden" name="idt"  value="'.$row['idt'].'">';
 echo '<input type="hidden" name="tenidt"  value="'.$row['tenidt'].'">';
 echo '<input type="hidden" name="tomtatnd"  value="'.$row['tomtatnd'].'">';
 echo '<input type="hidden" name="hinhanh"  value="'.$row['hinhanh'].'">';
 echo '<input type="hidden" name="menu"  value="'.$row['menu'].'">';
 echo '<input type="hidden" name="nguoigui"  value="'.$row['nguoigui'].'">';
 echo '<input type="hidden" name="date"  value="'.$row['date'].'">';
 echo '<input type="hidden" name="time"  value="'.$row['time'].'">';
  echo 'Lượt xem:<br><input type="text" name="viewer"  value="'.$row['viewer'].'"><p>';





   echo '<p>
    <input type="submit" name="save" id="save" value="CẬP NHẬT / UPDATE" />
  </p>
</form>';
  
  
  
  
  
//echo '<a href="show-menu.chn">[+] Sửa Menu ( bao gồm các mục như: About US, Contacts,....,Menu Left,right)</a><br><br>';
	//	echo '<a href="show-products.chn">[+] Sửa Sản Phẩm ( bao gồm các mục sản phẩm)</a><br><br>';
		//echo '<a href="show-menu.chn">[+] Sửa menu ( bao gồm các mục bài viết ngoài index)</a><br><br>';
	}

} 
}
?>