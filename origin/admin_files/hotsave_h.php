<?
	
	include('db.php');
	
	$head_ru = $_POST['hot_head_h_ru'];
    if ($head_ru == ''){exit('stop');} 
    
    $text_ru = $_POST['hot_text_h_ru'];
    if ($text_ru == ''){exit('stop');} 
    
    
    $head_ua = $_POST['hot_head_h_ua'];
    if ($head_ua == ''){exit('stop');} 
    
    $text_ua = $_POST['hot_text_h_ua'];
    if ($text_ua == ''){exit('stop');} 
    
    
    $onoff = $_POST['hot_onoff_h'];
    
    
    
    
    
    $img_h = $_POST['img_h'];
    if ($img_h !== ''){
	$update = mysql_query("UPDATE hot SET img='$img_h' WHERE id = '1'");
	$update = mysql_query("UPDATE hot SET img_status='on' WHERE id = '1'");    
    }
    elseif($img_h == ''){
	$update = mysql_query("UPDATE hot SET img_status='off' WHERE id = '1'");
	$update = mysql_query("UPDATE hot SET img='$img_h' WHERE id = '1'");      
    }
    
	
	$update = mysql_query("UPDATE hot SET head_ru='$head_ru' WHERE id = '1'");
	$update = mysql_query("UPDATE hot SET content_ru='$text_ru' WHERE id = '1'");
	$update = mysql_query("UPDATE hot SET head_ua='$head_ua' WHERE id = '1'");
	$update = mysql_query("UPDATE hot SET content_ua='$text_ua' WHERE id = '1'");
	$update = mysql_query("UPDATE hot SET status='$onoff' WHERE id = '1'");
	
	
	
	echo 'ok';
	
?>