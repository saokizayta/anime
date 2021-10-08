<?php
include('config.php');
try {
		$pdo = new PDO("mysql:host=$hostname;dbname=$dbname","$username","$pw");
		// viết VN
		$pdo -> exec("SET CHARACTER SET utf8");
		$pdo -> exec("set chracter_set_client='utf8'");
		$pdo -> exec("set chracter_set_results='utf8'");
		$pdo -> exec("set collation_connnection='utf8_general_ci'");
		
		//error_reporting(E_All & ~E_NOTICE & ~E_DEPRECATED);
		//End
		
		
}
      	catch (PDOException $e) 
		
{
	
		echo "khong tiem thay du lieu Failed to get DB handle: " . $e->getMessage() . "\n";
		exit;
}
		
		
?>