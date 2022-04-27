 <?php
//ket nối

	include 'database.php';
//Hiển thị
$id= $_REQUEST['id'];
$sql="delete from pristontale where id='$id'";
$pdo->exec($sql);
	echo '<script type="text/javascript">alert("Xóa thành công!");window.location ="show-products.chn"; </script>'; 
	
	
	

?>