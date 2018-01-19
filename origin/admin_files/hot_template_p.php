<?include ('db.php');?>

<?
$source = mysql_query("SELECT * FROM hot WHERE id = '2'");
while($rowx = mysql_fetch_array($source)){
$head_ru = $rowx['head_ru'];
$cont_ru = $rowx['content_ru'];
$activity = $rowx['status'];
$img = $rowx['img'];
$imgstatus = $rowx['img_status'];
$textstatus = $rowx['text_status'];
}
?>


<?
	if ($imgstatus == 'on'){
		
	?>
	
<div class="hot_prev" style="background:#fff url(<?print $img;?>) center center no-repeat; background-size: cover;">
<?}
		else{?>
		<div class="hot_prev">
<?		
		}
?>

<div class="hot_head"><?print $head_ru;?></div>
<div class="hot_text"><?print $cont_ru;?></div>
 </div>