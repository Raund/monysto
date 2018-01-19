<?include ('admin_files/db.php');?>






<div class="selector">
	<div class="fewannotation">
		Цена и статус сохраняются автоматически при изменении. Нужно изменить цену и кликнуть в любом месте страницы, в том числе это может поле с ценой другой позиции. Поле с ценой не может быть пустым. В данном случае будет выведено сообщение об ошибке и возвращено предыдущее значение.
	</div>
</div>

<h1>Блюда в меню</h1>


<?
$allcats = mysql_query("SELECT * FROM menu_cats");
while($rowshop = mysql_fetch_array($allcats)){
$catsarray[] = $rowshop["id"];
$cats = $catsarray;
}
?>

<div class="sliderup">
<div class="showcontainer" id="showcats">
	<div id="showtoggle1" class="togglecattext">Показать категории меню</div>
	<div id="showtoggle2" class="togglecattext off">Показать блюда</div>
</div>
<div class="addfood"><a class="linktoadd" href="add_food.php">+ Добавить блюдо</a></div>
<div class="clear"></div>
</div>

<div class="catfood off">

<div class="food_cats"><!-- SHOW ALL CATS -->

<? foreach ($cats as $onecat){

$source = mysql_query("SELECT * FROM menu_cats WHERE id='$onecat'");
while($rowx = mysql_fetch_array($source)){
$cat_id = $rowx['id'];
$cat_name = $rowx['cat_ru'];
$cat_status = $rowx['status'];

if ($cat_id == '1'){
	?>
<div id="catline-<?print $cat_id;?>" class="catline">
	    <div class="indicator enable"></div>
	    <div class="catname cnt"><?print $cat_name;?></div>
		<div class="catstatus alwon">Всегда активна</div>
		<div class="clear"></div>
	</div>
<?	
}

elseif ($cat_id == '1' || $cat_id == '13' || $cat_id == '14'){
echo '';	
}



else{?>


<?if ($cat_status == 'on'){?>
	<div id="catline-<?print $cat_id;?>" class="catline">
		<div id="disen-<?print $cat_id;?>"  class="indicator"></div>
	<?}	
	else{?>
	<div id="catline-<?print $cat_id;?>" class="catline flinedis">
		<div id="disen-<?print $cat_id;?>" class="indicator disable"></div>
	<? }?>


<script>
$('#catform-<?print $cat_id?>').ajaxForm(function(msg){
if(msg === 'stop'){
	
		        $("body").addClass('noflow');
	            $('.pop').fadeIn(400);
	            $('#no').fadeIn(400);
	            setTimeout(function(){ 
                $("body").removeClass('noflow');
                $(".pop").fadeOut(400);
                $('#no').fadeOut(400);
                }, 1500);
                 setTimeout(function(){ 
                $('#result').load('03_eat.php');
                }, 1500);
                
                	
	            
		           //location.reload(); 
	           }
	          if(msg === 'ok')
	           {
		           
		        
		        $("body").addClass('noflow');
	            $('.pop').fadeIn(400);
	            $('#yes').fadeIn(400);
	            setTimeout(function(){ 
                $("body").removeClass('noflow');
                $(".pop").fadeOut(400);
                $('#yes').fadeOut(400);
                }, 1500);
                //setTimeout(function(){ 
                //$('#result').load('03_eat.php');
                //}, 1910);
                
	           } 
	           
	        });
</script>
	
	<form id="catform-<?print $cat_id?>" method="post" action="admin_files/catstatus.php" >
		<input type="text" name="catidparam" hidden value="<?print $cat_id;?>">
		<div class="catname"><?print $cat_name;?></div>
		<div class="catstatus">
		    <div class="select-style">	
			<select name="catstatus" onchange="catSave<?print $cat_id;?>()">
			<?if ($cat_status == 'on'){?>
				 
			 <option value="on" selected>ON</option>
			 <option value="off" >OFF</option> 
				 
				 
				 
			 <?}	
			 else{?>
			 <option value="on">ON</option>
			 <option value="off" selected>OFF</option>
			<? }
			 
			 
			 ?>	
			</select>
			</div>
		</div>
		
		<button type="submit" id="subm_cat_id-<?print $cat_id;?>" hidden>save</button>
		<div class="clear"></div>
	</form>
	</div>
	
	<script>
function catSave<?print $cat_id;?>() {
    document.getElementById('subm_cat_id-<?print $cat_id;?>').click();
    $('#catline-<?print $cat_id;?>').toggleClass('flinedis');
    $('#disen-<?print $cat_id;?>').toggleClass('disable');
}
</script>


<?}




}
unset ($onecat);}?>


	
</div><!-- END ALL CATS -->
<div class="catfood_legend">
		В разделе еды возможность добавления новый категорий отключена.
	Добавлять новые категории можно для винной карты и бара. Удалять категории нельзя. Ненужные категории нужно отключать, присваивая им статус «OFF».
</div>
<div class="clear"></div>
</div>
























<div class="all_food"><!-- All food starts -->







<!--<script>
$('#foodfilter').ajaxForm(function(msg){
if(msg === 'stop'){
	
		        $("body").addClass('noflow');
	            $('.pop').fadeIn(400);
	            $('#no').fadeIn(400);
	            setTimeout(function(){ 
                $("body").removeClass('noflow');
                $(".pop").fadeOut(400);
                $('#no').fadeOut(400);
                }, 1500);
                 setTimeout(function(){ 
                $('#result').load('03_eat.php');
                }, 1500);
                
                	
	            
		           //location.reload(); 
	           }
	          if(msg === 'ok')
	           {
		           
		        
		        //$("body").addClass('noflow');
	            //$('.pop').fadeIn(400);
	            //$('#yes').fadeIn(400);
	            //setTimeout(function(){ 
                //$("body").removeClass('noflow');
                //$(".pop").fadeOut(400);
                //$('#yes').fadeOut(400);
                //}, 1500);
                setTimeout(function(){ 
                $('#result').load('03_eat.php');
                }, 100);
                
	           } 
	           
	        });
</script>

<form id="foodfilter" method="post" action="admin_files/foodfilter.php">
<select name="selfilter">
	<option>All cats</option>
	<?
		foreach ($cats as $cat_id){
			
			if ($cat_id !== '13' && $cat_id !='14')
			{
			$source = mysql_query("SELECT * FROM menu_cats WHERE id='$cat_id'");
            while($rowx = mysql_fetch_array($source)){
	        $cat_name = $rowx['cat_ru'];
	        $cid = $rowx['id'];
	        }
		
		?>
		<option value="<?print $cid;?>"><?print $cat_name;?></option>
		<?
			}
		unset ($cat_id);	
		}?>
</select>
<button type="submit">dfsdf</button>
</form>-->



<?
foreach ($cats as $cat_id){

$source = mysql_query("SELECT * FROM menu_cats WHERE id='$cat_id'");
while($rowx = mysql_fetch_array($source)){
$d_cat_name = $rowx['cat_ru'];
}
?>






<?
$source = mysql_query("SELECT * FROM menu_items WHERE cat_id='$cat_id'");
while($rowx = mysql_fetch_array($source)){
$d_id = $rowx['id'];
$d_cat = $rowx['cat_id'];
$d_name_ru = $rowx['food_name_ru'];
$d_w = $rowx['weight'];
$d_ci = $rowx['w_ci_RU']; 
$d_price = $rowx['price'];
$d_status = $rowx['status'];
?>
<script>
$('#food_form-<?print $d_id;?>').ajaxForm(function(msg){
if(msg === 'stop'){
	
		        $("body").addClass('noflow');
	            $('.pop').fadeIn(400);
	            $('#no').fadeIn(400);
	            setTimeout(function(){ 
                $("body").removeClass('noflow');
                $(".pop").fadeOut(400);
                $('#no').fadeOut(400);
                }, 1500);
                 setTimeout(function(){ 
                $('#result').load('03_eat.php');
                }, 1500);
                
                	
	            
		           //location.reload(); 
	           }
	          if(msg === 'ok')
	           {
		           
		        
		        //$("body").addClass('noflow');
	            //$('.pop').fadeIn(400);
	            //$('#yes').fadeIn(400);
	            //setTimeout(function(){ 
                //$("body").removeClass('noflow');
                //$(".pop").fadeOut(400);
                //$('#yes').fadeOut(400);
                //}, 1500);
                setTimeout(function(){ 
                $('#result').load('03_eat.php');
                }, 100);
                
	           } 
	           
	        });
</script>
<form id="food_form-<?print $d_id;?>" method="post" action="admin_files/savefoodprice.php">

	
	
	<?if ($d_status == 'on'){?>
	<div class="food_row flineen">
		<div class="indicator enable"></div>
	<?}	
	else{?>
	<div class="food_row flinedis">
		<div class="indicator disable"></div>
	<? }?>
	
	
	
	<input type="text" name="realid" value="<?print $d_id;?>" hidden>
	<div class="food_cat_name"><?print $d_cat_name;?></div>
	<div class="food_name"><a class="toedit" href="edit.php?id=<?print $d_id;?>"><?print $d_name_ru;?></a></div>
	<div class="food_weight"><?print $d_w;?></div>
	<div class="food_ci"><?print $d_ci;?></div>
	<div class="food_price"><input type="text" class="prin" id="inpid-<?print $d_id;?>" name="price-<?print $d_id;?>" value="<?print $d_price;?>" onchange="autoSave<?print $d_id;?>()"></div>
	<div class="food_cur">uah</div>
	<div class="food_status">
		<div  class="select-style">
		<select id="selid-<?print $d_id;?>" name="status-<?print $d_id;?>" onchange="autoSave<?print $d_id;?>()">
			<?if ($d_status == 'on'){?>
				 
			 <option value="on" selected>ON</option>
			 <option value="off" >OFF</option> 
				 
				 
				 
			 <?}	
			 else{?>
			 <option value="on">ON</option>
			 <option value="off" selected>OFF</option>
			<? }
			 
			 
			 ?>
		</select>
		</div>
	</div>
	
	
	<button id="subm_id-<?print $d_id;?>" hidden type="submit">save</button>
	
	<div class="clear"></div>
</div>
</form>

<script>
function autoSave<?print $d_id;?>() {
    document.getElementById('subm_id-<?print $d_id;?>').click();
}
</script>



<?
}
?>


















	
	
<?
	unset ($cat_id);
	}
?>







</div><!--All Food ends-->




<script>
$('#showcats').click(function(){
$('.catfood').slideToggle( "slow", function() {
	$('.catfood').addClass('supermarg');
	$('#showtoggle1').toggleClass('off');
	
});

$('.all_food').slideToggle( "slow", function() {
	$('#showtoggle2').toggleClass('off');
});
});
</script>
