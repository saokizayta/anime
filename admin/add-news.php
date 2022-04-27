<?php 
session_start();
echo header('Content-Type: text/html; charset=UTF-8');
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
		
  
  echo '<form id="form1" name="form1" method="post" action="add/news.php">';

  

echo '<!--readonly="readonly"-->';
echo '<font color="#FFFFFF">';

echo'Tiêu đề:<br><input type="text" name="newsname"  value="'.$row['newsname'].'"><p>';
 echo 'Tóm tắt:<br><textarea name="newstomtat"  " class="ckeditor" cols="40" rows="6">'.$row['newstomtat'].'</textarea><p>';
  
echo 'Nội dung:<br><textarea name="newsnoidung" class="ckeditor" cols="40" rows="6">'.$row['newsnoidung'].'</textarea><p>';
echo 'Url hình:<br><input type="text" name="newsimages" value="'.$row['newsimages'].'"><p>';
  
echo 'Date:<br><textarea name="newsdate" readonly="readonly" cols="40" rows="6">';

echo date("D, F j,Y");

echo '</textarea><p>';

 echo 'Time:<br><input type="text" name="newstime" readonly="readonly"  value="';echo date("H:i:s");echo'"><p>';
  echo 'Viewer:<br><input type="text" name="newsviewer"  value="'.$row['newsviewer'].'"><p>';





   echo '<p>
    <input type="submit" name="save" id="save" value="CẬP NHẬT / UPDATE" />
  </p>
</form>';
  
  
  
  
  
//echo '<a href="show-news.chn">[+] Sửa news ( bao gồm các mục như: About US, Contacts,....,news Left,right)</a><br><br>';
	//	echo '<a href="show-products.chn">[+] Sửa Sản Phẩm ( bao gồm các mục sản phẩm)</a><br><br>';
		//echo '<a href="show-news.chn">[+] Sửa news ( bao gồm các mục bài viết ngoài index)</a><br><br>';
	

	}
}
?>