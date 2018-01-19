<?
$server   = "icase.mysql.ukraine.com.ua";
$database = "icase_monysto";
$username = "icase_monysto";
$password = "lmmjpz64";	
	
	
$mysqlConnection = mysql_connect($server, $username, $password);
mysql_select_db($database, $mysqlConnection);
mysql_query('SET NAMES utf8');
mysql_query("SET character_set_server='utf8'");
mysql_query("SET character_set_system='utf8'");
mysql_query("SET character_set_client='utf8'"); 

?>