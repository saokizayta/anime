<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$connect['host'] = "remote.myvnc.com";
	$connect['user'] = "sb";
	$connect['pass'] = "123456";
	$connect['db'] = "logdb";

	$connect['string'] = "DRIVER={SQL Server};";
	$connect['string'] .= "SERVER=".$connect['host'].";";
	$connect['string'] .= "DATABASE=".$connect['db'];
	
	try {
		$connect['connection'] = @odbc_connect($connect['string'],$connect['user'],$connect['pass']);
		
		} catch(Exception $e){
		$connect['connection'] = FALSE;
		echo('Não foi possivel conectar com o SQL!<br>');
		echo('Error: '.$e);
	}
    //echo 'Connect Success';
    ?>