<?include ('db.php');?>

<?


	
	
$source = mysql_query("SELECT * FROM hot WHERE id = '1'");
while($rowx = mysql_fetch_array($source)){
$head_ru = $rowx['head_ru'];
$cont_ru = $rowx['content_ru'];
$head_ua = $rowx['head_ua'];
$cont_ua = $rowx['content_ua'];
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
<div style="position:absolute; margin-top: 20px; margin-left: 20px; font-family: pblack; font-size: 30px; color:#efefef;">UA</div>
<div class="hot_head"><?print $head_ua;?></div>
<div class="hot_text"><?print $cont_ua;?></div>
 </div>