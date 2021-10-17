<?php
$badwords = array("--", ";", "@@","nchar", "varchar", "nvarchar","create", "cursor",
                  "declare", "delete", "drop", "exec","execute", "fetch", "insert", "open",
                  "select", "sysobjects", "syscolumns",
				  "account_db", "accountdb", "COLUMN", "ClanDB",
				  "GameLogDB", "ItemLogDB", "LogDB", "rPTDB",
				  "ADM", "PAINELDADOS", "SoD2DB", "LOGIN",
				  "UPDATE", "TABLE", "DATABASE",
                  "table", "update", "=");
foreach($_REQUEST as $value)
foreach($badwords as $word)
if(substr_count($value, $word) > 0)
die("N�o utilize caracteres especiais, espa�o, acentua��o ou s�mbolos! Obrigado ;)");

//$IP = "http://zeropt.zapto.org/ClanContent/"; 

// PRISTON TALE SERVER DIRETORIO
$rootDir = "C:/ZeroPTServer1"; 

// MUDAN�A PARA O SEU NOME DO COMPUTADOR
$connection_string = 'DRIVER={SQL Server};SERVER=remote.myvnc.com;DATABASE=ClanDB';

// USUARIO DO SQLEXPRESS USER E PASSWORD 
$user = 'sb';
$pass = '123456';
?>
