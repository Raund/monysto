





 



<? 
$allcats  = mysql_query("SELECT * FROM menu_cats WHERE status ='on'");
while($row = mysql_fetch_array($allcats)){
$statementy[] = $row["id"];
$cat_ids = $statementy;
}


$allfoods  = mysql_query("SELECT * FROM menu_items WHERE status ='on'");
while($row = mysql_fetch_array($allfoods)){
$statementx[] = $row["id"];
$ids = $statementx;
}

$vinecats  = mysql_query("SELECT * FROM vine_cats WHERE status ='on'");
while($row = mysql_fetch_array($vinecats)){
$statement1[] = $row["id"];
$vinecat_ids = $statement1;
}


$alccats  = mysql_query("SELECT * FROM alc_cats WHERE status ='on'");
while($row = mysql_fetch_array($alccats)){
$statement2[] = $row["id"]; 
$alccat_ids = $statement2;
}

?>

<section class="food_menu">
<div class="food_menu_hello">
			<div class="big_header_b" style="padding-top: 120px; margin-bottom: 50px;"><?print $lang['P_MENU'];?></div>
			



<div class="custom-container nonImageContent">
    <div class="mf_p prev" id="fixback"></div>
    <div class="carousel">
        <ul>

<?
foreach ($cat_ids as $cat_id){
	$source = mysql_query("SELECT * FROM menu_cats  WHERE id='$cat_id' AND status ='on'  ");
    while($rowx = mysql_fetch_array($source)){
    $cat_name = $rowx["$cl"];
    $cid = $rowx["id"];
    $pic = $rowx["cat_pic"]; 
    $speed= $rowx["anim_speed"]; 
    ?>
   
   
            <li id="mcat-<?echo $cid;?>" class="cat_sel">
             <div class="menuicon" style=" background:url( <?echo "'".  $pic ."'"  ;?> ) center center no-repeat!important; background-size: cover!important;"></div>
             <div class="menuname"><?echo $cat_name;?></div>
            </li>
            
            <script>
$("#mcat-<?echo $cid;?>").click(function() {
	    $("li[id^='mcat-']").removeClass('cat_sel');
	    $(this).addClass('cat_sel');
	    
	     $('html, body').animate({
        scrollTop: $(".food_menu").offset().top
        }, 300);
	    
	    $("div[id^='foodlist-']").removeClass('slideUp2');
	    $("div[id^='foodlist-']").fadeOut(400);
	   
	    setTimeout(function(){ 
            $("#foodlist-<?echo $cid;?>").fadeIn(0);
            $("#foodlist-<?echo $cid;?>").addClass('slideUp2');
             }, 700); 
      });
</script>
    
    
    
    <?
    }
}

?>



</ul>
    </div>
    <div class="mf_n next" id="fixme"></div>
    <div class="clear"></div>
</div>

<script type="text/javascript">
$(function() {
    var doc_w = $(document).width();
    alert(doc_w);
		if (doc_w < 992 && doc_w > 768) {
            $(".nonImageContent .carousel").jCarouselLite({
                btnNext: ".nonImageContent .next",
                btnPrev: ".nonImageContent .prev",
                visible: 4,
                circular: false
            });
        } else 
        if(doc_w <= 768 && doc_w >= 425){
            $(".nonImageContent .carousel").jCarouselLite({
                btnNext: ".nonImageContent .next",
                btnPrev: ".nonImageContent .prev",
                visible: 2,
                circular: false
            });
        } else
        if(doc_w < 425){
            $(".nonImageContent .carousel").jCarouselLite({
                btnNext: ".nonImageContent .next",
                btnPrev: ".nonImageContent .prev",
                visible: 1,
                circular: false
            });
        } else {
            $(".nonImageContent .carousel").jCarouselLite({
                btnNext: ".nonImageContent .next",
                btnPrev: ".nonImageContent .prev",
                visible: 5,
                circular: false
            });
        }
});
</script>





<script>
	$(document).ready(function () {
	
	$('#foodlist-1').removeClass('off');
	
	var menufood = $('.food_menu');

    $(window).scroll(function () {
        var y = $(this).scrollTop();
        var z = $('.food_menu').offset().top;

        if (y >= z) {
	        
	         setTimeout(function(){
		    //$('#foodlist-1').addClass('slideUp2');
             }, 200);
             
            
        }
        
    });
    });
</script>


</div>
		
		
		<div class="food_menu_inner">



<?

foreach ($cat_ids as $cat_id){
	$source = mysql_query("SELECT * FROM menu_cats  WHERE id='$cat_id' AND status ='on'  ");
    while($rowx = mysql_fetch_array($source)){
    $cat_name = $rowx["$cl"];
    $cid = $rowx["id"];
    ?>
    
    <div id="foodlist-<?echo $cid;?>" class="off">
			<div class="food_menu_right">
				
				<div class="food_cat"><?echo $cat_name;?></div>
                
                <div class="inmenu">	
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?}
	    
	    
	    
	    ////////////////////////////////////
	    
	    
	    if($cat_id=="13")
	    { /////////////
		    
		    
         include('vines.php');
		    
		    
	    }//////////////
	    
	    
	    
	     if($cat_id=="14")
	    { /////////////
		    
		    
         include('alc.php');
		    
		    
	    }//////////////
	    
    
    
        ////////////////////////////////////
    
    
    else{ //ELSE START
    
    
    $source = mysql_query("SELECT * FROM menu_items  WHERE cat_id='$cat_id'  AND status ='on' ");
    while($rowx = mysql_fetch_array($source)){
    $food_name = $rowx["$fl"];
    $food_structure = $rowx["$sl"];
    $food_id = $rowx["id"];
    $food_weight = $rowx["weight"];
    $w_ci = $rowx["$wci"];
    $food_price = $rowx["price"];
    ?>
    
    <div class="one_food">
					<div class="food_main_info">
					 <div class="food_name"><?echo $food_name;?></div>
					 <div class="food_w"><?echo $food_weight;?> <?echo $w_ci;?></div>
					 <div class="food_price"><?echo number_format($food_price, 2, '.', '');?> <span style="text-transform: uppercase;"><?print $lang['CUR'];?></span></div>
					 <div class="clear"></div>
					</div> 
					
					<div class="ingr"><?echo $food_structure;?></div>
				</div>
				
				
				
			   
    
    <?}
  } //else end
?>
 </div>
			
			</div>
			<div class="clear"></div>
			</div>
<?
unset($cat_id);
}


?>


		</div>


</section>	

	
		
		



			
			
		
			

			
			
						
				
				
				
			
		


