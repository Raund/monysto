<?

include('db.php');
	
 
$hotel_title_ua = $_POST['hotel_title_ua'];
if ($hotel_title_ua == ''){exit('stop');} 



$hotel_title_ru = $_POST['hotel_title_ru'];
if ($hotel_title_ru == ''){exit('stop');} 
$hotel_title_en = $_POST['hotel_title_en'];
if ($hotel_title_en == ''){exit('stop');} 


$hotel_keys_ua = $_POST['hotel_keys_ua'];
if ($hotel_keys_ua == ''){exit('stop');} 
$hotel_keys_ru = $_POST['hotel_keys_ru'];
if ($hotel_keys_ru == ''){exit('stop');}
$hotel_keys_en = $_POST['hotel_keys_en'];
if ($hotel_keys_en == ''){exit('stop');}  


$hotel_desc_ua = $_POST['hotel_desc_ua'];
if ($hotel_desc_ua == ''){exit('stop');} 
$hotel_desc_ru = $_POST['hotel_desc_ru'];
if ($hotel_desc_ru == ''){exit('stop');} 
$hotel_desc_en = $_POST['hotel_desc_en'];
if ($hotel_desc_en == ''){exit('stop');} 







$update = mysql_query("UPDATE content_h SET ua='$hotel_title_ua' WHERE id = '1'");
$update = mysql_query("UPDATE content_h SET ru='$hotel_title_ru' WHERE id = '1'");
$update = mysql_query("UPDATE content_h SET en='$hotel_title_en' WHERE id = '1'");

$update = mysql_query("UPDATE content_h SET ua='$hotel_keys_ua' WHERE id = '10'");
$update = mysql_query("UPDATE content_h SET ru='$hotel_keys_ru' WHERE id = '10'");
$update = mysql_query("UPDATE content_h SET en='$hotel_keys_en' WHERE id = '10'");

$update = mysql_query("UPDATE content_h SET ua='$hotel_desc_ua' WHERE id = '9'");
$update = mysql_query("UPDATE content_h SET ru='$hotel_desc_ru' WHERE id = '9'");
$update = mysql_query("UPDATE content_h SET en='$hotel_desc_en' WHERE id = '9'");


echo 'ok';




?>
