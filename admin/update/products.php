<?php
//ket nối
	include 'database.php';
//Hiển thị

	
	
		
		$idproducts= $_GET['idproducts'];
		$productsname= $_POST['productsname'];
		$productstomtat= $_POST['productstomtat'];
		$productsnoidung= $_POST['productsnoidung'];
        $productsdate= $_POST['productsdate'];
		$productstime= $_POST['productstime'];
		$productsviewer= $_POST['productsviewer'];
		if(isset($_POST['save'])){
		
		//luu vao CSDL
		
$sql="update products set productsname='$productsname',productstomtat='$productstomtat',productsnoidung='$productsnoidung',productsdate='$productsdate',productstime='$productstime',productsviewer='$productsviewer' where idproducts='$idproducts'";
	 mysql_query("set names 'utf8'");		
	 mysql_query($sql);
	
	 $pdo->exec($sql);
	 echo '<script type="text/javascript">alert("Xin chúc mừng, update bài viết thành công!");window.location ="close.php"; </script>'; 
		
	}
$sql="select * from news where idproducts='$idproducts'";
$tintuc=$pdo->query($sql);
$tintuc=$tintuc->fetch();

 ?>