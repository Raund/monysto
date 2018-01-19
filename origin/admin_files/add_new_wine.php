<?
include('db.php');


	
$name_ua = $_POST['name_ua'];
	if ($name_ua == ''){exit('stop');} 
$str_ua = $_POST['str_ua'];

$ci_ua = $_POST['ci_ua'];
    if ($ci_ua == ''){exit('stop');} 
    
    
$name_ru = $_POST['name_ru'];
	if ($name_ru == ''){exit('stop');} 
$str_ru = $_POST['str_ru'];

$ci_ru = $_POST['ci_ru'];
    if ($ci_ru == ''){exit('stop');} 
	

$name_en = $_POST['name_en'];
	if ($name_en == ''){exit('stop');} 
$str_en = $_POST['str_en'];

$ci_en = $_POST['ci_en'];
    if ($ci_en == ''){exit('stop');} 
    
    
$w = $_POST['w'];
if ($w == ''){exit('stop');} 
$price = $_POST['price'];
if ($price == ''){exit('stop');} 

$status = $_POST['status'];

$cat_id = $_POST['cat_id'];
if ($cat_id == ''){exit('stop');} 






$source = mysql_query("SELECT * FROM vine_cats WHERE id='$cat_id'");
while($rowx = mysql_fetch_array($source)){
$cat_name = $rowx['vinecat_ru'];
}




$insert = "INSERT INTO vine_items 
(
vinecat_id,
subcat_id,
vine_name_ua, 
structure_ua, 
vine_name_ru,
structure_ru, 
vine_name_en,
structure_en,
weight,
w_ci_UA,
w_ci_RU,
w_ci_EN,
price,
status
)". 
"VALUES (
'$cat_id',
'$cat_name',
'$name_ua',
'$str_ua',
'$name_ru',
'$str_ru',
'$name_en',
'$str_en',
'$w',
'$ci_ua',
'$ci_ru',
'$ci_en',
'$price',
'$status'

); 

";

mysql_query($insert) or die (mysql_error());


	
echo 'ok';	
	






















?>