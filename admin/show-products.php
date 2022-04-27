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
	echo "Bạn đang đăng nhập với tài khoản {$member['username']}."; 
	echo "<br><a href='thoat.php'>Thoát ra</a> │ <a href='add-menu.php'>Thêm Chuyên Mục</a> │ <a href='add-products.php'>Thêm Bài Viết</a><hr>";
	if ($member['admin']!="1")  
		echo "Bạn ko phải là admin";
	else
	{
		//Noi dung cac ham, cac lenh va code danh cho admin
		
			include('connect.php');	
			mysql_query("set names 'utf8'");
			$query1 = " SELECT * FROM `pristontale` where menu=0 order by id Desc ";
			mysql_query("set names 'utf8'");
			$result = mysql_query($query1);
			
			


					while($row = mysql_fetch_array($result))
	

				{    
			
                 
				 echo''.$row['menudate'].'';
				 echo' <br>ID [ = '.$row['id'].' ] <a href="#" "><strong><font color="#FFFFFF">[+] '.$row['tieude'].'</font></strong></a> ';
				echo'</strong>';
				echo '<a href="edit-bai-'.$row['id'].'" onclick="window.open(\'edit-bai-'.$row['id'].'\'+encodeURIComponent(document.title), \'delicious\',\'toolbar=no,width=550,height=550\'); return false;" class="delicious" target="_blank">[ SỬA / UPDATE]</a>';
  echo '<font color="#123456">------------</font><a href="delete-p.php?id='.$row['id'].'">XÓA</a>';

                
				}
				
	}

} 
?>


















