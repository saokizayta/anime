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