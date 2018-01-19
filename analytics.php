
	
<?	
$source = mysql_query("SELECT * FROM analytics WHERE id = '1'");
while($rowx = mysql_fetch_array($source)){
$code_google = $rowx['code'];
}

$source = mysql_query("SELECT * FROM analytics WHERE id = '2'");
while($rowx = mysql_fetch_array($source)){
$code_yandex = $rowx['code'];
}
?>

	
