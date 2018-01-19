<?
	
	include('db.php');
	

	
$id=$_POST['realid'];	
	
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




$update = mysql_query("UPDATE menu_items SET 

food_name_ua='$name_ua', 
food_name_ru='$name_ru',
food_name_en='$name_en',

structure_ua='$str_ua',
structure_ru='$str_ru',
structure_en='$str_en',

w_ci_UA='$ci_ua',
w_ci_RU='$ci_ru',
w_ci_EN='$ci_en',

weight='$w',
price='$price',
status='$status'

WHERE id = '$id'");

echo 'ok';


?>