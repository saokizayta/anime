<?php
	//Conexão ao banco de dados
	$sqlserver = "remote.myvnc.com"; //Instância do SQL
	$account = "sb"; //Usuário do SQL
	$password = "123456"; //Senha do SQL
	$dbSOD = "KhoEMD"; //Define a database que seu SQL.dll conecta para salvar os pontos de SoD. => SodDB ou SoD2DB <= (SQL.dll do gregooverse.net por padrão salva na SodDB)
	

?>
<?php

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

?>
