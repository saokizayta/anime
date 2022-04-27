<?php
//ket nối
	include 'database.php';
//Hiển thị

	
	
		
		$newsid= $_GET['newsid'];
		$newsname= $_POST['newsname'];
		$newstomtat= $_POST['newstomtat'];
		$newsnoidung= $_POST['newsnoidung'];
        $newsdate= $_POST['newsdate'];
		$newstime= $_POST['newstime'];
		$newsviewer= $_POST['newsviewer'];
		if(isset($_POST['save'])){
		
		//luu vao CSDL
		
$sql="update news set newsname='$newsname',newstomtat='$newstomtat',newsnoidung='$newsnoidung',newsdate='$newsdate',newstime='$newstime',newsviewer='$newsviewer' where newsid='$newsid'";
	 mysql_query("set names 'utf8'");		
	 mysql_query($sql);
	
	 $pdo->exec($sql);
	 echo '<script type="text/javascript">alert("Xin chúc mừng, update bài viết thành công!");window.location ="close.php"; </script>'; 
		
	}
$sql="select * from news where newsid='$newsid'";
$tintuc=$pdo->query($sql);
$tintuc=$tintuc->fetch();

 ?>