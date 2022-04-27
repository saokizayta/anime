<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>SinhVienIT.Net - Khoi tao CSDL (Huong Dan tao trang dang ki/Dang Nhap)</title>
<?php
require_once("mysql.php");
@$create=mysql_query("CREATE TABLE `members` (
`id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`username` VARCHAR( 128 ) NOT NULL ,
`password` VARCHAR( 32 ) NOT NULL ,
`email` VARCHAR( 255 ) NOT NULL ,
`URLS` VARCHAR( 255 ) NOT NULL ,
`Name` VARCHAR( 255 ) NOT NULL ,
`Birthday` VARCHAR( 255 ) NOT NULL ,
`admin` INT( 1 ) NOT NULL DEFAULT '0' ,
PRIMARY KEY ( `id` )
) TYPE = MYISAM ;");
@$add_admin=mysql_query("
INSERT INTO `members` (
`id` ,
`username` ,
`password` ,
`email` ,
`URLS` ,
`Name` ,
`Birthday` ,
`admin`
)
VALUES (
NULL , 'admin', MD5( 'admin' ) , 'admin@sinhvienit.net', 'http://sinhvienit.net', 'Vũ Thanh Lai', '29/09/1990', '1'
);
");
if ($create)
	print "Table \"members\" đã được tạo.<br>";
else
	print "Table \"members\" chưa được tạo do lỗi truy vấn SQL.<br>";
	
if ($add_admin)
	print "<b>TK Admin:</b><br>User: admin<br>Pass:admin<br>";
else
	print "Ko thể tạo tài khoản admin vì lỗi SQL.<br>";
	
echo '<a href="index.php">Click vào đầy để xem Demo</a>';
?> 