<?php
//ket nối
	include 'database.php';
//Hiển thị

	
	
			if(isset($_POST['save'])){
		$idproducts= $_POST['idproducts'];
		$productsname= $_POST['productsname'];
		$productstomtat= $_POST['productstomtat'];
		$productsnoidung= $_POST['productsnoidung'];
        $productsdate= $_POST['productsdate'];
		$productstime= $_POST['productstime'];
		$productsviewer= $_POST['productsviewer'];
		
		
		//luu vao CSDL
		
$sql="insert into `products` (idproducts,productsname,productstomtat,productsnoidung,productsdate,productstime,productsviewer) Values ('$idproducts','$productsname','$productstomtat','$productsnoidung','$productsdate','$productstime','$productsviewer')";
	 mysql_query("set names 'utf8'");		
	 mysql_query($sql);
	
	 $pdo->exec($sql);
	 echo '<script type="text/javascript">alert("Xin chúc mừng, update bài viết thành công!");window.location ="close.php"; </script>'; 
		
	}
$sql="select * from products where idproducts='$idproducts'";
$tintuc=$pdo->query($sql);
$tintuc=$tintuc->fetch();

 ?>