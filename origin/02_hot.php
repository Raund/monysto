<?include ('admin_files/db.php');?>

<?
$source = mysql_query("SELECT * FROM hot WHERE id = '1'");
while($rowx = mysql_fetch_array($source)){
$head_ru = $rowx['head_ru'];
$cont_ru = $rowx['content_ru'];
$activity = $rowx['status'];
//$img = $rowx['img'];
//$imgstatus = $rowx['img_status'];
//$textstatus = $rowx['text_status'];
}
?>






<div class="selector">
	<div class="oneselector fsel" id="sel_h">Для отеля</div>
	<div class="oneselector" id="sel_p">Для пиццерии</div>
	<div class="clear"></div>
</div>

<script>
$(document).ready(function(){
$("#sel_h").addClass('active2');
});	
	
$('#sel_p').click(function(){
$('.seobox-1').fadeOut(500);
setTimeout(function(){ 
$('.seobox-2').fadeIn(500);
}, 500);
$( "div[id^='sel_']" ).removeClass('active2');
$(this).addClass('active2');
});

$('#sel_h').click(function(){
$('.seobox-2').fadeOut(500);
setTimeout(function(){ 
$('.seobox-1').fadeIn(500);
}, 500);
$( "div[id^='sel_']" ).removeClass('active2');
$(this).addClass('active2');
});
</script>


<script>
$('#hotform-1').ajaxForm(function(msg){
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
                setTimeout(function(){ 
                $('#hot_result-1').load('admin_files/hot_template_h_ru.php');
                $('#hot_result-2').load('admin_files/hot_template_h_ua.php');
                }, 1500);
	           } 
	           
	        });
	        
$('#hotform-2').ajaxForm(function(msg){
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
                setTimeout(function(){ 
                $('#hot_result-3').load('admin_files/hot_template_p_ru.php');
                $('#hot_result-4').load('admin_files/hot_template_p_ua.php');
                }, 1500);
	           } 
	           
	        });	        
</script>




<script>
	function sbmt1(){
      document.getElementById('hf1').click();
    }
</script>

<script>
	function sbmt2(){
      document.getElementById('hf2').click();
    }
</script>

<div class="seobox-1">
<h1>Акции для отеля</h1>

<div class="hotbox">
<!--hotbox-->



  <div id="hot_result-1">
	<?include('admin_files/hot_template_h_ru.php');?>
  </div>




<div class="hot_fields">
	<form id="hotform-1" method="post" action="admin_files/hotsave_h.php">
	<div><input type="text" class="hotinp" placeholder="Заголовок" name="hot_head_h_ru" autocomplete="off" value="<?print $head_ru;?>"></div>
	<div><textarea class="hotarea" placeholder="Текст" name="hot_text_h_ru"><?print $cont_ru;?></textarea></div>
	<div class="hot_tip">
		Акции включаются одновременно для для «RU» и «UA» версий сайта. В версии «EN» акции отображаться не будут.
	</div>
	
</div>	


<div class="clear"></div>


<!--hotbox-->
 </div>	



<div class="hotbox">
<!--hotbox-->



  <div id="hot_result-2">
	<?include('admin_files/hot_template_h_ua.php');?>
  </div>




<div class="hot_fields">
	
	<div><input type="text" class="hotinp" placeholder="Звголовок" name="hot_head_h_ua" autocomplete="off" value="<?print $head_ua;?>"></div>
	<div><textarea placeholder="Текст" class="hotarea" name="hot_text_h_ua"><?print $cont_ua;?></textarea></div>
	<div class="hot_tip">
		Акции включаются одновременно для для «RU» и «UA» версий сайта. В версии «EN» акции отображаться не будут.
	</div>
	
	
	<div class="select-style4">
<select type="text" name="hot_onoff_h" onchange="sbmt1();">
			<?if ($activity == 'on'){?>
			<option value="on" selected>Active</option>
			 <option value="off" >Disable</option> 
			<?}	
			 else{?>
			 <option value="on">Active</option>
			 <option value="off" selected>Disable</option>
			<? }
			 ?>
	</select></div>
    
    <div><button id="hf1" class="save2" type="submit">Сохранить</button></div>
	
	
	
	
	
</div>	


<div class="clear"></div>


<!--hotbox-->
 </div>	


</form>



<div style="padding-bottom: 150px;"></div>
</div>














<div class="seobox-2 off">
<h1>Акции для пиццерии</h1>

<div class="hotbox">
<!--hotbox-->



  <div id="hot_result-3">
	<?include('admin_files/hot_template_p_ru.php');?>
  </div>




<div class="hot_fields">
	<form id="hotform-2" method="post" action="admin_files/hotsave_p.php">
	<div><input type="text" class="hotinp" placeholder="Заголовок" name="hot_head_h_ru" autocomplete="off" value="<?print $head_ru;?>"></div>
	<div><textarea class="hotarea" placeholder="Текст" name="hot_text_h_ru"><?print $cont_ru;?></textarea></div>
	<div class="hot_tip">
		Акции включаются одновременно для для «RU» и «UA» версий сайта. В версии «EN» акции отображаться не будут.
	</div>
	
</div>	


<div class="clear"></div>


<!--hotbox-->
 </div>	



<div class="hotbox">
<!--hotbox-->



  <div id="hot_result-4">
	<?include('admin_files/hot_template_p_ua.php');?>
  </div>




<div class="hot_fields">
	
	<div><input type="text" class="hotinp" placeholder="Звголовок" name="hot_head_h_ua" autocomplete="off" value="<?print $head_ua;?>"></div>
	<div><textarea placeholder="Текст" class="hotarea" name="hot_text_h_ua"><?print $cont_ua;?></textarea></div>
	<div class="hot_tip">
		Акции включаются одновременно для для «RU» и «UA» версий сайта. В версии «EN» акции отображаться не будут.
	</div>
	
	
	<div class="select-style4">
<select type="text" name="hot_onoff_p" onchange="sbmt2();">
			<?if ($activity == 'on'){?>
			<option value="on" selected>Active</option>
			 <option value="off" >Disable</option> 
			<?}	
			 else{?>
			 <option value="on">Active</option>
			 <option value="off" selected>Disable</option>
			<? }
			 ?>
	</select></div>
    
    <div><button id="hf2" class="save2" type="submit">Сохранить</button></div>
	
	
	
	
	
</div>	


<div class="clear"></div>


<!--hotbox-->
 </div>	


</form>



<div style="padding-bottom: 150px;"></div>
</div>