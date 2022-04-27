 <?php
//ket nối

	include 'database.php';
//Hiển thị
$newsid= $_REQUEST['newsid'];
$sql="delete from news where newsid='$newsid'";
$pdo->exec($sql);
	echo '<script type="text/javascript">alert("Xin chúc mừng, update bài viết thành công!");window.location ="show-news.chn"; </script>'; 
	
	
	

?>