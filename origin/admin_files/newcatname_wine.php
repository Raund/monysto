<?
	include('db.php');
	
	
	$ua = $_POST['newcat_ua'];
	if ($ua == ''){exit('stop');} 
	
	$ru = $_POST['newcat_ru'];
	if ($ru == ''){exit('stop');} 
	
	$en = $_POST['newcat_en'];
	if ($en == ''){exit('stop');} 
	
	$status = 'off';
	
	
	
	$insert = "INSERT INTO vine_cats 
(
vinecat_ua,
vinecat_en,
vinecat_ru,
status
)". 
"VALUES (
'$ua',
'$en',
'$ru',
'$status'

); 

";

mysql_query($insert) or die (mysql_error());
	
	
	echo 'ok';
?>