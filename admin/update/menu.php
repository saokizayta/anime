<?php
//ket nối
	include 'database.php';
//Hiển thị

	
	
		
		$id= $_GET['id'];
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
		
		if(isset($_POST['save'])){
		
		//luu vao CSDL
		
$sql="update pristontale set idt='$idt',tenidt='$tenidt',tieude='$tieude',tomtatnd='$tomtatnd',hinhanh='$hinhanh',noidung='$noidung',nguoigui='$nguoigui',date='$date',time='$time',menu='$menu',viewer='$viewer'  where id='$id'";
	 mysql_query("set names 'utf8'");		
	 mysql_query($sql);
	
	 $pdo->exec($sql);
	 echo '<script type="text/javascript">alert("Xin chúc mừng, update bài viết thành công!");window.location ="close.php"; </script>'; 
		
	}
$sql="select * from pristontale where id='$id'";
$tintuc=$pdo->query($sql);
$tintuc=$tintuc->fetch();

 ?>