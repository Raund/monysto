<?  
	


include('db.php');
	
 
$real_id = $_POST['realid'];
$price = $_POST['price-'.$real_id];
$status = $_POST['status-'.$real_id];
if ($price == ''){
	exit('stop');
}
else{
$update = mysql_query("UPDATE vine_items SET status='$status', price='$price' WHERE id = '$real_id'");	
echo 'ok';

}


	
?>