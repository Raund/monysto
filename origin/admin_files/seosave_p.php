<?


	
 
$pizza_title_ua = $_POST['pizza_title_ua'];
if ($pizza_title_ua == ''){exit('stop');} 
$pizza_title_ru = $_POST['pizza_title_ru'];
if ($pizza_title_ru == ''){exit('stop');} 
$pizza_title_en = $_POST['pizza_title_en'];
if ($pizza_title_en == ''){exit('stop');} 


$pizza_keys_ua = $_POST['pizza_keys_ua'];
if ($pizza_keys_ua == ''){exit('stop');} 
$pizza_keys_ru = $_POST['pizza_keys_ru'];
if ($pizza_keys_ru == ''){exit('stop');}
$pizza_keys_en = $_POST['pizza_keys_en'];
if ($pizza_keys_en == ''){exit('stop');}  


$pizza_desc_ua = $_POST['pizza_desc_ua'];
if ($pizza_desc_ua == ''){exit('stop');} 
$pizza_desc_ru = $_POST['pizza_desc_ru'];
if ($pizza_desc_ru == ''){exit('stop');} 
$pizza_desc_en = $_POST['pizza_desc_en'];
if ($pizza_desc_en == ''){exit('stop');} 





include('db.php');

$update = mysql_query("UPDATE content_p SET ua='$pizza_title_ua' WHERE id = '1'");
$update = mysql_query("UPDATE content_p SET ru='$pizza_title_ru' WHERE id = '1'");
$update = mysql_query("UPDATE content_p SET en='$pizza_title_en' WHERE id = '1'");

$update = mysql_query("UPDATE content_p SET ua='$pizza_keys_ua' WHERE id = '10'");
$update = mysql_query("UPDATE content_p SET ru='$pizza_keys_ru' WHERE id = '10'");
$update = mysql_query("UPDATE content_p SET en='$pizza_keys_en' WHERE id = '10'");

$update = mysql_query("UPDATE content_p SET ua='$pizza_desc_ua' WHERE id = '11'");
$update = mysql_query("UPDATE content_p SET ru='$pizza_desc_ru' WHERE id = '11'");
$update = mysql_query("UPDATE content_p SET en='$pizza_desc_en' WHERE id = '11'");


echo('ok');




?>
