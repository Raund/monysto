<?  
	


include('db.php');
	

$cat_id = $_POST['catidparam']; 
$catstatus = $_POST['catstatus']; 


$update = mysql_query("UPDATE menu_cats SET status='$catstatus' WHERE id = '$cat_id'");	
echo 'ok';


	
?>