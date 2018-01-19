<?
	
include('db.php');	
$std1 = $_POST['std-1'];	
$fml1 = $_POST['fml-1'];
$std2 = $_POST['std-2'];	
$fml2 = $_POST['fml-2'];
$std3 = $_POST['std-3'];	
$fml3 = $_POST['fml-3'];
$std4 = $_POST['std-4'];	
$fml4 = $_POST['fml-4'];
$std5 = $_POST['std-5'];	
$fml5 = $_POST['fml-5'];
$std6 = $_POST['std-6'];	
$fml6 = $_POST['fml-6'];
$std7 = $_POST['std-7'];	
$fml7 = $_POST['fml-7'];
$std8 = $_POST['std-8'];	
$fml8 = $_POST['fml-8'];
$std9 = $_POST['std-9'];	
$fml9 = $_POST['fml-9'];
$std11 = $_POST['std-11'];	
$fml11 = $_POST['fml-11'];	


if ($std1 == ''){exit('stop');} 
if ($fml1 == ''){exit('stop');} 

if ($std2 == ''){exit('stop');} 
if ($fml2 == ''){exit('stop');} 

if ($std3 == ''){exit('stop');} 
if ($fml3 == ''){exit('stop');} 

if ($std4 == ''){exit('stop');} 
if ($fml4 == ''){exit('stop');} 

if ($std5 == ''){exit('stop');} 
if ($fml5 == ''){exit('stop');} 
if ($std6 == ''){exit('stop');} 
if ($fml6 == ''){exit('stop');}
if ($std7 == ''){exit('stop');} 
if ($fml7 == ''){exit('stop');}  
if ($std8 == ''){exit('stop');} 
if ($fml8 == ''){exit('stop');}
if ($std9 == ''){exit('stop');} 
if ($fml9 == ''){exit('stop');} 
if ($std11 == ''){exit('stop');} 
if ($fml11 == ''){exit('stop');}  

	



$update = mysql_query("UPDATE seasons SET standard='$std1', family='$fml1' WHERE id = '1'");
$update = mysql_query("UPDATE seasons SET standard='$std2', family='$fml2' WHERE id = '2'");
$update = mysql_query("UPDATE seasons SET standard='$std3', family='$fml3' WHERE id = '3'");
$update = mysql_query("UPDATE seasons SET standard='$std4', family='$fml4' WHERE id = '4'");
$update = mysql_query("UPDATE seasons SET standard='$std5', family='$fml5' WHERE id = '5'");
$update = mysql_query("UPDATE seasons SET standard='$std6', family='$fml6' WHERE id = '6'");
$update = mysql_query("UPDATE seasons SET standard='$std7', family='$fml7' WHERE id = '7'");
$update = mysql_query("UPDATE seasons SET standard='$std8', family='$fml8' WHERE id = '8'");
$update = mysql_query("UPDATE seasons SET standard='$std9', family='$fml9' WHERE id = '9'");
$update = mysql_query("UPDATE seasons SET standard='$std11', family='$fml11' WHERE id = '11'");
	echo 'ok';
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>