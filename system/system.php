<?
		//prices

$strSQL = "SELECT price FROM room_price WHERE id=1";
$rs = mysql_query($strSQL);
while($row = mysql_fetch_array($rs)) {
$price_standard = $row ['price'];
}

$strSQL = "SELECT price FROM room_price WHERE id=2";
$rs = mysql_query($strSQL);
while($row = mysql_fetch_array($rs)) {
$price_family = $row ['price'];
}


$price['PRICE_STD'] = $price_standard;
$price['PRICE_FML'] = $price_family;



?>