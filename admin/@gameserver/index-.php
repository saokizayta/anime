<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="vi-gb" >
    <head>
  <!---    <base href="http://clone/" /> --->
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script>
//1
	$(document).ready(function() {
    $('#userinfo_userdb').DataTable( {

        "order": [[ 10, "desc" ]],
		"lengthMenu": [[20, 30, 50, -1], [20, 30, 50, "All"]]
		
    } );
} );

//3

$('#userinfo_userdb').on( 'click', 'tbody tr:not(:first-child)', function (e) {
        editor.inline( this, {
            onBlur: 'submit'
        } );
    } );

</script>
</head>
<body>
<?php
	$connect['host'] = "VPS-20-11-16-10\SQLEXPRESS";
	$connect['user'] = "sa";
	$connect['pass'] = "G@m3m@st3rptvui";
	$connect['db'] = "userdb";

	$connect['string'] = "DRIVER={SQL Server};";
	$connect['string'] .= "SERVER=".$connect['host'].";";
	$connect['string'] .= "DATABASE=".$connect['db'];

	try{
		$connect['connection'] = @odbc_connect($connect['string'],$connect['user'],$connect['pass']);
	} catch(Exception $e){
		$connect['connection'] = FALSE;
		echo('Não foi possivel conectar com o SQL!<br>');
		echo('Error: '.$e);
	}

	$query = "SELECT * FROM [userdb].[dbo].[UserInfo] WHERE 
	(
	AccountName NOT LIKE 'HoChiMinh' and 
	AccountName!='BacHo' and 
	AccountName!='[GM]Skull' and 
	AccountName!='MG' and 
	AccountName!='Knight' and 
	AccountName!='HelloWorld' and 
	AccountName!='GM' and 
	AccountName!='NewSupport' and
    AccountName!='3DVungQue' and
    AccountName!='ADMAtalanta'
	) ORDER BY BanStatus DESC";
	
	///HTML
	echo'<table id="userinfo_userdb" class="display" style="width:100%">
        <thead>
            <tr>
                
	  <th>AccountName</th>
	  <th>Password</th>
      <th>RegisDay</th>
      <th>Flag</th>
      <th>Active</th>
      <th>ActiveCode</th>
      <th>Coins</th>
      <th>Email</th>
      <th>GameMasterType</th>
      <th>GameMasterLevel</th>
      <th>GameMasterMacAddress</th>
      <th>CoinsTraded</th>
      <th>BanStatus</th>
      <th>UnbanDate</th>
                
            </tr>
        </thead>
        <tbody>';
	
	$q = odbc_do($connect['connection'],$query);
	$i = 0;
	while(odbc_fetch_row($q)){
	$i++;
	   // echo '<td width="14%">'.$i.'</td>';
    
	//echo '<td align="left" width="10">'.odbc_result($q,"Name").'</td>';
	//echo '<td width="6%">'.odbc_result($q,"Level").'</td>';
      
//echo '</tr>';

 echo' 
	<tr>
                
	  <td>'.odbc_result($q,"AccountName").'</td>
      <td>'.odbc_result($q,"Password").'</td>
      <td>'.odbc_result($q,"RegisDay").'</td>
      <td>'.odbc_result($q,"Flag").'</td>
      <td>'.odbc_result($q,"Active").'</td>
      <td>'.odbc_result($q,"ActiveCode").'</td>
      <td>'.odbc_result($q,"Coins").'</td>
      <td>'.odbc_result($q,"Email").'</td>
      <td>'.odbc_result($q,"GameMasterType").'</td>
      <td>'.odbc_result($q,"GameMasterLevel").'</td>
      <td>'.odbc_result($q,"GameMasterMacAddress").'</td>
      <td>'.odbc_result($q,"CoinsTraded").'</td>
      <td>'.odbc_result($q,"BanStatus").'</td>
      <td>'.odbc_result($q,"UnbanDate").'</td>
				
				
    </tr>
     ';

	}
	echo'</tbody>
        <tfoot>
            <tr>
      <th>AccountName</th>
	  <th>Password</th>
      <th>RegisDay</th>
      <th>Flag</th>
      <th>Active</th>
      <th>ActiveCode</th>
      <th>Coins</th>
      <th>Email</th>
      <th>GameMasterType</th>
      <th>GameMasterLevel</th>
      <th>GameMasterMacAddress</th>
      <th>CoinsTraded</th>
      <th>BanStatus</th>
      <th>UnbanDate</th>
                
            </tr>
        </tfoot>
    </table>';
	if(!$i>0)
	   echo "<center>Hiện chưa có thông tin.";

?>
</body>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
