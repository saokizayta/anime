<?php
//ket nối
	include 'database.php';
//Hiển thị

	
	
		if(isset($_POST['save'])){
		$newsid= $_POST['newsid'];
		$newsname= $_POST['newsname'];
		$newstomtat= $_POST['newstomtat'];
		$newsnoidung= $_POST['newsnoidung'];
        $newsdate= $_POST['newsdate'];
		$newsimages= $_POST['newsimages'];
		$newstime= $_POST['newstime'];
		$newsviewer= $_POST['newsviewer'];

		
		//luu vao CSDL
		
$sql="insert into `news` (newsid,newsname,newstomtat,newsnoidung,newsdate,newsimages,newstime,newsviewer) Values ('$newsid','$newsname','$newstomtat','$newsnoidung','$newsdate','$newsimages','$newstime','$newsviewer')";
	 mysql_query("set names 'utf8'");		
	 mysql_query($sql);
	
	 $pdo->exec($sql);
	 echo '<script type="text/javascript">alert("Xin chúc mừng, update bài viết thành công!");window.location ="close.php"; </script>'; 
		
	}
$sql="select * from news where newsid='$newsid'";
$tintuc=$pdo->query($sql);
$tintuc=$tintuc->fetch();

 ?>