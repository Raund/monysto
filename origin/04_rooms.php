<?include ('admin_files/db.php');?>


<script>
$('#seasonform').ajaxForm(function(msg){
if(msg === 'stop'){
	//alert('error');
		        $("body").addClass('noflow');
	            $('.pop').fadeIn(400);
	            $('#no').fadeIn(400);
	            setTimeout(function(){ 
                $("body").removeClass('noflow');
                $(".pop").fadeOut(400);
                $('#no').fadeOut(400);
                }, 1500);
                
              
	           }
	          if(msg === 'ok')
	           {
	//	           alert('ok');
		        $("body").addClass('noflow');
	            $('.pop').fadeIn(400);
	            $('#yes').fadeIn(400);
	            setTimeout(function(){ 
                $("body").removeClass('noflow');
                $(".pop").fadeOut(400);
                $('#yes').fadeOut(400);
                }, 1500);
	           } 
	           
	        });
</script>

<div class="selector">
	<div class="fewannotation">
		Кликни на цену, чтобы ее изменить. Затем нажми кнопку «Сохранить». Поля с ценами не должны быть пустыми.
	</div>
</div>

<h1>Сезоны и цены</h1>

<div class="seasons">
<form id="seasonform" method="post" action="admin_files/seasonsave.php">	
	<div class="oneline sss">
		<div class="s1">Сезон</div>
		<div class="s2">Стандарт</div>
		<div class="s3">Семейный</div>
		<div class="clear"></div>
	</div>

<?
$source = mysql_query("SELECT * FROM seasons ORDER BY id ASC");
while($rowx = mysql_fetch_array($source)){
$id = $rowx['id'];
$start = $rowx['start'];
$end = $rowx['end'];
$std= $rowx['standard'];
$fml= $rowx['family'];
?>
<div class="oneline">
		<div class="s1 ssx"><?print $start?> – <?print $end?></div>
		<div class="s2">
			<input type="text" class="inp2" name="std-<?print $id?>" value="<?print $std?>">
			<div class="cu">грн</div>
		</div>
		<div class="s3">
			<input type="text" class="inp2" name="fml-<?print $id?>" value="<?print $fml?>">
			<div class="cu">грн</div>
		</div>
		<div class="clear"></div>
	</div>
<?
}
?>




	
	
<button class="save"  style="margin-top:50px;" type="submit">Сохранить</button>	
</form>	
</div>


