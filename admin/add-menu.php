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
	echo "Xin chào {$member['Name']} Bạn đang đăng nhập với tài khoản {$member['username']}."; 
	echo "<br><a href='thoat.php'>Thoát ra</a><hr>";
	if ($member['admin']!="1")  
		echo "Bạn ko phải là admin";
	else
	{
		

		//Noi dung cac ham, cac lenh va code danh cho admin
		
  
  echo '<form id="form1" name="form1" method="post" action="add-menu.php">';

  

echo '<!--readonly="readonly"-->';
echo '<font color="#FFFFFF">';


echo '<input type="hidden" name="idt"  value="">';
 echo '<input type="hidden" name="tenidt"  value="">';

 
 echo'Tiêu đề:<br><input type="text" name="tieude"  value=""><p>';
 echo '<input type="hidden" name="tomtatnd"  value="">';
 echo '<input type="hidden" name="hinhanh"  value="">';
 echo 'Tóm tắt:<br><textarea name="noidung"  " class="ckeditor" cols="40" rows="6"></textarea><p>';
  
//echo 'Nội dung:<br><textarea name="menunoidung" class="ckeditor" cols="40" rows="6">'.$row['menunoidung'].'</textarea><p>';
//echo 'Url hình:<br><input type="text" name="menuimages" value="'.$row['menuimages'].'"><p>';
  
//echo 'Date:<br><textarea name="menudate" cols="40" rows="6">'.$row['menudate'].'</textarea><p>';
 
 
  echo '<input type="hidden" name="nguoigui"  value="">';
 echo 'Date:<br><textarea name="date" readonly="readonly" cols="40" rows="6">';

echo date("D, F j,Y");

echo '</textarea><p>';

 echo 'Time:<br><input type="text" name="time" readonly="readonly"  value="';echo date("H:i:s");echo'"><p>';
 echo 'Menu:<br><select name="menu">
  <option value="1">Là Menu</option>
  
  
</select><br>';

 
  echo '<input type="hidden" name="viewer"  value=""><p>';





   echo '<p>
    <input type="submit" name="save" id="save" value="CẬP NHẬT / UPDATE" />
  </p>
</form>';
  
  
  
  
  
//echo '<a href="show-menu.chn">[+] Sửa Menu ( bao gồm các mục như: About US, Contacts,....,Menu Left,right)</a><br><br>';
	//	echo '<a href="show-products.chn">[+] Sửa Sản Phẩm ( bao gồm các mục sản phẩm)</a><br><br>';
		//echo '<a href="show-menu.chn">[+] Sửa menu ( bao gồm các mục bài viết ngoài index)</a><br><br>';
	
	
	}
}
?>
<?php
//ket nối
	include 'database.php';
//Hiển thị

	
	
		if(isset($_POST['save'])){
		$id= $_POST['id'];
		$idt= $_POST['idt'];
		$tenidt= $_POST['tenidt'];
		$tieude= $_POST['tieude'];
        $tomtatnd= $_POST['tomtatnd'];
		$hinhanh= $_POST['hinhanh'];
		$noidung= $_POST['noidung'];
		$nguoigui= $_POST['nguoigui'];
		$date= $_POST['date'];
		$time= $_POST['time'];
		$menu= $_POST['menu'];
		$viewer= $_POST['viewer'];
		
		
		//luu vao CSDL
		 mysql_query("SET NAMES 'UTF8'");
$sql="insert into `pristontale`(id,idt,tenidt,tieude,tomtatnd,hinhanh,noidung,nguoigui,date,time,menu,viewer) Values ('$id','$idt','$tenidt','$tieude','$tomtatnd','$hinhanh','$noidung','$nguoigui','$date','$time','$menu','$viewer')";
	 mysql_query("SET NAMES 'UTF8'");
			
	
	
	$pdo->exec($sql);
	echo '<script type="text/javascript">alert("Xin chúc mừng, bài viết của bạn đã thêm thành công!");window.location ="admin.php"; </script>'; 
	}


?>