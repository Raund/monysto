<?
	
	include('db.php');
	
	$g = $_POST['google'];
	$y = $_POST['yandex'];
	
	
	
	
	
	$g2 =  '<plaintext>'.$g.'</plaintext>';
	$y2 =  '<plaintext>'.$y.'</plaintext>';
	
	
	//echo $g2;
	
	$update = mysql_query("UPDATE analytics SET code='$g2' WHERE id = '1'");
	$update = mysql_query("UPDATE analytics SET code='$y2' WHERE id = '2'");
	
	echo 'ok';
?>