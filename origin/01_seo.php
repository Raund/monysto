
<?include ('admin_files/db.php');?>



<?


$source = mysql_query("SELECT * FROM content_h WHERE id = '1'");
while($rowx = mysql_fetch_array($source)){
$h_title_ua = $rowx['ua'];
$h_title_en = $rowx['en'];
$h_title_ru = $rowx['ru'];
}

$source = mysql_query("SELECT * FROM content_h WHERE id = '9'");
while($rowx = mysql_fetch_array($source)){
$h_desc_ua = $rowx['ua'];
$h_desc_en = $rowx['en'];
$h_desc_ru = $rowx['ru'];
}

$source = mysql_query("SELECT * FROM content_h WHERE id = '10'");
while($rowx = mysql_fetch_array($source)){
$h_keys_ua = $rowx['ua'];
$h_keys_en = $rowx['en'];
$h_keys_ru = $rowx['ru'];
}

$source = mysql_query("SELECT * FROM content_p WHERE id = '1'");
while($rowx = mysql_fetch_array($source)){
$p_title_ua = $rowx['ua'];
$p_title_en = $rowx['en'];
$p_title_ru = $rowx['ru'];
}

$source = mysql_query("SELECT * FROM content_p WHERE id = '11'");
while($rowx = mysql_fetch_array($source)){
$p_desc_ua = $rowx['ua'];
$p_desc_en = $rowx['en'];
$p_desc_ru = $rowx['ru'];
}

$source = mysql_query("SELECT * FROM content_p WHERE id = '10'");
while($rowx = mysql_fetch_array($source)){
$p_keys_ua = $rowx['ua'];
$p_keys_en = $rowx['en'];
$p_keys_ru = $rowx['ru'];
}

?>
<script>
$('#seoform_h').ajaxForm(function(msg){
if(msg === 'stop'){
	
		        $("body").addClass('noflow');
	            $('.pop').fadeIn(400);
	            $('#no').fadeIn(400);
	            setTimeout(function(){ 
                $("body").removeClass('noflow');
                $(".pop").fadeOut(400);
                $('#no').fadeOut(400);
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
	           } 
	           
	        });
</script>

<script>
$('#seoform_p').ajaxForm(function(msg){
if(msg === 'stop'){
	
		        $("body").addClass('noflow');
	            $('.pop').fadeIn(400);
	            $('#no').fadeIn(400);
	            setTimeout(function(){ 
                $("body").removeClass('noflow');
                $(".pop").fadeOut(400);
                $('#no').fadeOut(400);
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
	           } 
	           
	        });
</script>


<div class="selector">
	<div class="oneselector fsel" id="sel_h">SEO для отеля</div>
	<div class="oneselector" id="sel_p">SEO для пиццерии</div>
	<div class="oneselector" id="sel_a">Счетчики</div>
	<div class="clear"></div>
</div>

<script>
$(document).ready(function(){
$("#sel_h").addClass('active2');
});	
	
$('#sel_p').click(function(){
$('.seobox-1').fadeOut(500);
$('.seobox-3').fadeOut(500);
setTimeout(function(){ 
$('.seobox-2').fadeIn(500);
}, 500);
$( "div[id^='sel_']" ).removeClass('active2');
$(this).addClass('active2');
});

$('#sel_h').click(function(){
$('.seobox-2').fadeOut(500);
$('.seobox-3').fadeOut(500);
setTimeout(function(){ 
$('.seobox-1').fadeIn(500);
}, 500);
$( "div[id^='sel_']" ).removeClass('active2');
$(this).addClass('active2');
});

$('#sel_a').click(function(){
$('.seobox-2').fadeOut(500);
$('.seobox-1').fadeOut(500);
setTimeout(function(){ 
$('.seobox-3').fadeIn(500);
}, 500);
$( "div[id^='sel_']" ).removeClass('active2');
$(this).addClass('active2');
});



</script>





<div class="seobox-1">

<h1>SEO для отеля</h1>
<form id="seoform_h" method="post" action="admin_files/seosave_h.php">
  
  <div class="onelang">
    <div class="st_text">ua</div>
	<div class="st_header"></div>
	
	<div class="line1">
	<div class="lab">Title</div>
	<div class="cinp"><input class="inp1" type="text" name="hotel_title_ua" value="<?print $h_title_ua;?>"></div>
	<div class="clear"></div>
	</div>
	
	<div class="line1">
	<div class="lab">Keywords</div>
	<div class="cinp"><input class="inp1" type="text" name="hotel_keys_ua" value="<?print $h_keys_ua;?>"></div>
	<div class="clear"></div>
	</div>
	
	<div class="line1">
	<div class="lab">Description</div>
	<div class="cinp"><input class="inp1" type="text" name="hotel_desc_ua" value="<?print $h_desc_ua;?>"></div>
	<div class="clear"></div>
	</div>
 </div>	
  <div class="onelang">
    <div class="st_text">ru</div>
	<div class="st_header"></div>
	
	<div class="line1">
	<div class="lab">Title</div>
	<div class="cinp"><input class="inp1" type="text" name="hotel_title_ru" value="<?print $h_title_ru;?>"></div>
	<div class="clear"></div>
	</div>
	
	<div class="line1">
	<div class="lab">Keywords</div>
	<div class="cinp"><input class="inp1" type="text" name="hotel_keys_ru" value="<?print $h_keys_ru;?>"></div>
	<div class="clear"></div>
	</div>
	
	<div class="line1">
	<div class="lab">Description</div>
	<div class="cinp"><input class="inp1" type="text" name="hotel_desc_ru" value="<?print $h_desc_ru;?>"></div>
	<div class="clear"></div>
	</div>
 </div>	
  <div class="onelang">
    <div class="st_text">en</div>
	<div class="st_header"></div>
	
	<div class="line1">
	<div class="lab">Title</div>
	<div class="cinp"><input class="inp1" type="text" name="hotel_title_en" value="<?print $h_title_en;?>"></div>
	<div class="clear"></div>
	</div>
	
	<div class="line1">
	<div class="lab">Keywords</div>
	<div class="cinp"><input class="inp1" type="text" name="hotel_keys_en" value="<?print $h_keys_en;?>"></div>
	<div class="clear"></div>
	</div>
	
	<div class="line1">
	<div class="lab">Description</div>
	<div class="cinp"><input class="inp1" type="text" name="hotel_desc_en" value="<?print $h_desc_en;?>"></div>
	<div class="clear"></div>
	</div>
 </div>	
 
 <button class="save" type="submit">Сохранить</button>

</form>

</div>


<div class="seobox-2 off">

<h1>SEO для пиццерии</h1>
<form id="seoform_p" method="post" action="admin_files/seosave_p.php">
  
  <div class="onelang">
    <div class="st_text">ua</div>
	<div class="st_header"></div>
	
	<div class="line1">
	<div class="lab">Title</div>
	<div class="cinp"><input class="inp1" type="text" name="pizza_title_ua" value="<?print $p_title_ua;?>"></div>
	<div class="clear"></div>
	</div>
	
	<div class="line1">
	<div class="lab">Keywords</div>
	<div class="cinp"><input class="inp1" type="text" name="pizza_keys_ua" value="<?print $p_keys_ua;?>"></div>
	<div class="clear"></div>
	</div>
	
	<div class="line1">
	<div class="lab">Description</div>
	<div class="cinp"><input class="inp1" type="text" name="pizza_desc_ua" value="<?print $p_desc_ua;?>"></div>
	<div class="clear"></div>
	</div>
 </div>	
  <div class="onelang">
    <div class="st_text">ru</div>
	<div class="st_header"></div>
	
	<div class="line1">
	<div class="lab">Title</div>
	<div class="cinp"><input class="inp1" type="text" name="pizza_title_ru" value="<?print $p_title_ru;?>"></div>
	<div class="clear"></div>
	</div>
	
	<div class="line1">
	<div class="lab">Keywords</div>
	<div class="cinp"><input class="inp1" type="text" name="pizza_keys_ru" value="<?print $p_keys_ru;?>"></div>
	<div class="clear"></div>
	</div>
	
	<div class="line1">
	<div class="lab">Description</div>
	<div class="cinp"><input class="inp1" type="text" name="pizza_desc_ru" value="<?print $p_desc_ru;?>"></div>
	<div class="clear"></div>
	</div>
 </div>	
  <div class="onelang">
    <div class="st_text">en</div>
	<div class="st_header"></div>
	
	<div class="line1">
	<div class="lab">Title</div>
	<div class="cinp"><input class="inp1" type="text" name="pizza_title_en" value="<?print $p_title_en;?>"></div>
	<div class="clear"></div>
	</div>
	
	<div class="line1">
	<div class="lab">Keywords</div>
	<div class="cinp"><input class="inp1" type="text" name="pizza_keys_en" value="<?print $p_keys_en;?>"></div>
	<div class="clear"></div>
	</div>
	
	<div class="line1">
	<div class="lab">Description</div>
	<div class="cinp"><input class="inp1" type="text" name="pizza_desc_en" value="<?print $p_desc_en;?>"></div>
	<div class="clear"></div>
	</div>
 </div>	
 
 <button class="save" type="submit">Сохранить</button>

</form>

</div>




<div class="seobox-3 off">
	<h1>Analytics и Метрика</h1>
	
<?	
$source = mysql_query("SELECT * FROM analytics WHERE id = '1'");
while($rowx = mysql_fetch_array($source)){
$code_google = $rowx['code'];
}

$source = mysql_query("SELECT * FROM analytics WHERE id = '2'");
while($rowx = mysql_fetch_array($source)){
$code_yandex = $rowx['code'];
}
?>





<script>
$('#seoform_a').ajaxForm(function(msg){
if(msg === 'stop'){
	
		        $("body").addClass('noflow');
	            $('.pop').fadeIn(400);
	            $('#no').fadeIn(400);
	            setTimeout(function(){ 
                $("body").removeClass('noflow');
                $(".pop").fadeOut(400);
                $('#no').fadeOut(400);
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
	           } 
	           
	        });
</script>	
	
	<form id="seoform_a" method="post" action="admin_files/ga.php">
		
		<?
			$g = preg_replace("'<plaintext>'si","",$code_google);
			$gx = preg_replace("'</plaintext>'si","",$g);
			$y = preg_replace("'<plaintext>'si","",$code_yandex);
			$yx = preg_replace("'</plaintext>'si","",$y);
		?>
		
		
		<div style="float:left;"><textarea name="google" class="hotarea2" placeholder="Код Google Analytics"><?print $gx?></textarea></div>
		<div style="float:left; margin-left: 20px;"><textarea name="yandex" class="hotarea2" placeholder="Код Яндекс Метрики"><?print $yx?></textarea></div>
		<div class="clear"></div>
		<button type="submit" class="save" style="margin-top: 40px;">Сохранить</button>
	</form>
	
	
</div>







