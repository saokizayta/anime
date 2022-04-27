 <?php
//ket nối

	include 'database.php';
//Hiển thị
$idmenu= $_REQUEST['idmenu'];
$sql="delete from menu where idmenu='$idmenu'";
$pdo->exec($sql);
	echo '<script type="text/javascript">alert("Xin chúc mừng, update bài viết thành công!");window.location ="show-menu.chn"; </script>'; 
	
	
	

?>