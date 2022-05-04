<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
echo '<link href="style.css" rel="stylesheet" type="text/css">';
echo ' <link href="editor/sample.css" rel="stylesheet" type="text/css" />
 <script src="editor/sample.js" type="text/javascript"></script>
 <script src="editor/ckeditor.js" type="text/javascript"></script>';
//require_once("mysql.php"); 
//if ( !$_SESSION['user_id'] )
//{ 
//	echo "Bạn chưa đăng nhập! <a href='login.php'>Nhấp vào đây để đăng nhập</a> hoặc <a href='register.php'>Nhấp vào đây để đăng ký</a>"; 
//}
//else
//{ 
	//$user_id = intval($_SESSION['user_id']);
	//$sql_query = @mysql_query("SELECT * FROM members WHERE id='{$user_id}'");
	//$member = @mysql_fetch_array( $sql_query ); 
	//echo "Xin chào {$member['name']} Bạn đang đăng nhập với tài khoản {$member['username']}."; 
	//echo "<br><a href='thoat.php'>Thoát ra</a><hr>";
	//if ($member['admin']!="1")  
	//	echo "Bạn ko phải là admin";
	//else
	//{
		

		//Noi dung cac ham, cac lenh va code danh cho admin
		include('connect.php');	
			//mysql_query("set names 'utf8'");
			$newsid = $_GET['newsid'];
			$query1 = " SELECT * FROM `news` where newsid='$newsid'";
			//mysql_query("set names 'utf8'");
			$result = mysqli_query($query1);
			
			


					while($row = mysqli_fetch_array($result))
	

				{    
  
  echo '<form id="form1" name="form1" method="post" action="update/news.php?newsid='.$row['newsid'].'">';

  

echo '<!--readonly="readonly"-->';
echo '<font color="#FFFFFF">';

echo'Tiêu đề:<br><input type="text" name="newsname"  value="'.$row['newsname'].'"><p>';
 echo 'Tóm tắt:<br><input type="text" name="newstomtat"  value="'.$row['newstomtat'].'"><p>';
  
echo 'Nội dung:<br><textarea name="newsnoidung" cols="40" rows="6">'.$row['newsnoidung'].'</textarea><p>';
echo 'Url hình:<br><input type="text" name="newsimages" value="'.$row['newsimages'].'"><p>';
  
echo 'Date:<br><textarea name="newsdate" cols="40" rows="6">'.$row['newsdate'].'</textarea><p>';

 echo 'Time:<br><input type="text" name="newstime"  value="'.$row['newstime'].'"><p>';
  echo 'Viewer:<br><input type="text" name="newsviewer"  value="'.$row['newsviewer'].'"><p>';





   echo '<p>
    <input type="submit" name="save" id="save" value="CẬP NHẬT / UPDATE" />
  </p>
</form>';
  
  
  
  
  
//echo '<a href="show-menu.chn">[+] Sửa Menu ( bao gồm các mục như: About US, Contacts,....,Menu Left,right)</a><br><br>';
	//	echo '<a href="show-products.chn">[+] Sửa Sản Phẩm ( bao gồm các mục sản phẩm)</a><br><br>';
		//echo '<a href="show-news.chn">[+] Sửa News ( bao gồm các mục bài viết ngoài index)</a><br><br>';
	}

//} 
//}
?>