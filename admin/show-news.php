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
	echo "<br><a href='thoat.php'>Thoát ra</a> │ <a href='add-menu.php'>Thêm Menu</a> │ <a href='add-products.php'>Thêm Sản Phẩm</a> │ <a href='add-news.php'>Thêm News</a><hr>";
	if ($member['admin']!="1")  
		echo "Bạn ko phải là admin";
	else
	{
		//Noi dung cac ham, cac lenh va code danh cho admin
		
			include('connect.php');	
			mysql_query("set names 'utf8'");
			$query1 = " SELECT * FROM `news` order by newsid Desc ";
			mysql_query("set names 'utf8'");
			$result = mysql_query($query1);
			
			


					while($row = mysql_fetch_array($result))
	

				{    
			
                 
				 echo''.$row['menudate'].'';
				 echo' <br>ID [ = '.$row['newsid'].' ] <a href="#" "><strong><font color="#FFFFFF">[+] '.$row['newsname'].'</font></strong></a> ';
				echo'</strong>';
				echo '<a href="edit-news-'.$row['newsid'].'" onclick="window.open(\'edit-news-'.$row['newsid'].'\'+encodeURIComponent(document.title), \'delicious\',\'toolbar=no,width=550,height=550\'); return false;" class="delicious" target="_blank">[ SỬA / ID: '.$row['newsid'].' ]</a><font color="#123456">------------</font>';
 // echo '<font color="#123456">------------</font><a href="'.$row['idmenu'].'" onclick="window.open(\''.$row['idmenu'].'\'+encodeURIComponent(document.title), \'delicious\',\'toolbar=no,width=550,height=550\'); return false;" class="delicious" target="_blank">[ THÊM / ADD ]</a><font color="#123456">------------</font>';
		echo '<font color="#123456">------------</font><a href="delete-n.php?newsid='.$row['newsid'].'">XÓA</a>';
		//echo '<a href="'.$row['idmenu'].'" onclick="window.open(\''.$row['idmenu'].'\'+encodeURIComponent(document.title), \'delicious\',\'toolbar=no,width=550,height=550\'); return false;" class="delicious" target="_blank">[ XÓA / ID: '.$row['newsid'].' ]</a>';

                
				}
				
	}

} 
?>





<?php    
$result = mysql_query("SELECT * FROM menu WHERE idmenu='$idmenu'");
while($row = mysql_fetch_array($result))
{    
    echo <<<HTML
    <li>
    <a href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './{$row['menuid']}',largeimage: './{$row['photo']}'}">
    <img src='{$row['photo']}' style="width:110px; height:110px;">
    </a>
    </li>
HTML;
}












