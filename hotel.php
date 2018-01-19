<?

	include('langs/l.php');
	include('system/system.php'); //prices etc
	//include('startcash.php');

?>



<!DOCTYPE html>
<html>
<head>
<title><?echo $lang['HEADER_TITLE'];?></title>
<META HTTP-EQUIV="Content-language" CONTENT="<?echo $lang['LOCALE'];?>">
<base href="/">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="<?echo $lang['DESCRIPTION'];?>"> 
<meta name="keywords" content="<?echo $lang['KEYWORDS'];?>"> 
<meta name="viewport" content="width=1200" >
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/style2.css" rel="stylesheet" type="text/css" media="screen,print"/>
<link href="css/r-adaptive-style.css" rel="stylesheet" type="text/css" media="screen,print"/>
<link href="css/animation.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500&subset=latin,cyrillic' rel='stylesheet' type='text/css'>


<!--

<meta property = "og:title" content = "Монисто" />
<meta property = "og:type" content = "article" />
<meta property = "og:image" content = "http://monysto.com/images/hotel/2.jpg" />
<meta property = "og:description" content = "Description." />
<meta property="og:url" content="http://monysto.com" />

-->



<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.3.1/moment.min.js"></script>

<link href="css/jquery.comiseo.daterangepicker.css" rel="stylesheet">
<script src="js/jquery.comiseo.daterangepicker.js"></script>

<script src="//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>  

<link href="css/looper.css" rel="stylesheet">
<script src="js/looper.js"></script>

<script src="js/video.js"></script>



<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-96874480-1', 'auto');
ga('send', 'pageview');

</script>



</head>


<body>



<div class="seasons off">
	<div class="close_seasons"></div>
	<div class="tabledata">
		<div class="one_table_line f-t-r">
			<div class="season_t1 f-f-f1"><?print $lang['SEASONS'];?></div>
			<div class="season_t2 f-f-f"><?print $lang['STANDARD_ROOM_NAME'];?></div>
			<div class="season_t3 f-f-f"><?print $lang['FAMILY_ROOM_NAME'];?></div>
			<div class="clear"></div>
		</div>
		
		<?include ('seasons.php');?>

		<!--<div class="one_table_line">
			<div class="season_t1">18.12 - 29.12</div>
			<div class="season_t2">690 грн.</div>
			<div class="season_t3">1070 грн.</div>
			<div class="clear"></div>
		</div>
		<div class="one_table_line">
			<div class="season_t1">30.12 - 10.01</div>
			<div class="season_t2">1600 грн.</div>
			<div class="season_t3">2300 грн.</div>
			<div class="clear"></div>
		</div>-->
	
	</div>
</div>	


	
	


<div class="all_ok off">
	                    <div class="message"><?print $lang['THANKYOU_HEADER'];?></div>
	                    <div class="mes_comm"><?print $lang['THANKYOU_ANNO'];?></div>
                    </div>
	                <div class="ov"></div>
	                <div class="ov2"></div>
	                
	                <script>
		      //          $('body').addClass('noflow');
              //$('.all_ok').removeClass('off');
              //$('.ov').fadeIn(400);
              //$('.all_ok').addClass('fadeTop');
	                </script>


	
<script>
jQuery(document).ready(function($) {
$("#clb1").submit(function() {
var str = $(this).serialize();
$.ajax({
type: "POST",
url: "/ok.php",
data: str,
success: function() {
$('').html(result);
}
});
return false;
});
});
</script>
	
	
	
	<div class="top">
		<div class="intop">
			<div class="top_logo"></div>
			<div class="nav">
				<ul>
					<li id="about"><?print $lang['ABOUT'];?></li>
					<li id="toroom"><?print $lang['ROOMS'];?></li>
					<li id="tobook"><?print $lang['BOOKING'];?></li>
					<li id="contacts"><?print $lang['CONTACTS'];?></li>
					<li><a href="http://monysto.com/pizza/"><?print $lang['PIZZA'];?></a></li>
					<?php
					$language = $_GET['lang'];
					?>
					<li>
						<a href="http://monysto.com/blog/<?=$language?>/">
						<?php if($language == 'en'):?>	
						Blog
						<?php else:?>
						Блог
						<?php endif;?>	
						</a>
					</li>
					
					
					<?
						$strSQL = "SELECT status FROM hot WHERE id=1";
                        $rs = mysql_query($strSQL);
                        while($row = mysql_fetch_array($rs)) {
	                        $detect = $lang['HOT'];
	                        $ds = $row['status'];
	                    
	                       if ($ds == 'on' ){
		                       
		                     if ($detect === 'hot offer'){
			                     echo '';
		                     }
		                     else
		                     echo '<li id="hot_offer" class="hot">'.$detect.'</li>';   
	                        
	                        
	                        }
                        
                        
                        
                        }
					?>
					
					
					
					
				</ul>
			</div>
			<div class="langs_sw">
				<ul>
					<li><a href="http://monysto.com/hotel.php?lang=en">en</a></li>
					<li><a href="http://monysto.com/hotel.php?lang=ua">ua</a></li>
					<li><a href="http://monysto.com/hotel.php?lang=ru">ru</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
	
	<script>      
      $("#about").click(function() {
	      
	      setTimeout(function() {
	      $('#video').fadeOut(0);
          }, 750);
          document.getElementById('myVideo').pause();
       $('html, body').animate({
        scrollTop: $(".first_text").offset().top
    }, 700);
    
});
      $("#toroom").click(function() {
	        setTimeout(function() {
	      $('#video').fadeOut(0);
          }, 750);
	$('html, body').animate({
        scrollTop: $(".newrooms").offset().top
    }, 700);
    
});

      $("#tobook").click(function() {
	        setTimeout(function() {
	      $('#video').fadeOut(0);
          }, 750);
	$('html, body').animate({
        scrollTop: $("#bookme").offset().top
    }, 700);
});

      $("#contacts").click(function() {
	        setTimeout(function() {
	      $('#video').fadeOut(0);
          }, 750);
	$('html, body').animate({
        scrollTop: $("footer").offset().top
    }, 700);
});

      $("#hot_offer").click(function() {
	      //$('#video').fadeOut(500);
	          setTimeout(function() {
              $('body').addClass('noflow');
              $('.popup').removeClass('off');
              $('.ov2').fadeIn(400);
              $('.popup').addClass('fadeTop');
}, 100);
});
</script>

	
	
	
	
	<section class="first">
	  <div class="overfirst">
		  <div class="ml"></div>
		  <div class="swiper-pagination swiper-pagination-white superpages"></div>
	  </div> 
	  
	  
	  


<div id="video">
   <?include ('video.php')?>
</div>
      
      
      
      <div class="startdown"><div class="mama bouncexdown"></div></div>
<script>      
      $(".startdown").click(function() {
	      setTimeout(function() {
	      $('#video').fadeOut(0);
          }, 750);
           document.getElementById('myVideo').pause();
    $('html, body').animate({
        scrollTop: $(".first_text").offset().top
    }, 450);
    
});
</script>
      
      
      <script>
	$(document).ready(function () {
    var video = $('#video');

    $(window).scroll(function () {
        var y = $(this).scrollTop();
        var z = $('.first_text').offset().top;

        if (y >= z) {
            video.addClass('off');
            video.fadeOut(0);
            document.getElementById('myVideo').pause();
        }
        else{
            video.removeClass('off');
            video.fadeIn(0);
            document.getElementById('myVideo').play();
        }
    });
    });
</script>
	     

		
	</section>
	
	
	
	
		

		
	<section class="first_text">
		<div class="first_text_inner">
			<div class="big_header_b"><?print $lang['ABOUT_HOTEL_HEADER']?></div>
			<div class="about_text_b">
				<?print $lang['ABOUT_HOTEL_TEXT']?>
			</div>
			<div class="orn"></div>
		</div>
	</section>	
	
		
		
		
<section class="ttt">
	
<div id="startrates" style="position:absolute;z-index:5;  width: 455px; left:50%; margin-left: -228px; bottom:10%; visibility: hidden; ">
	 <div class="fsq_s"></div>
	 <div class="bok_s"></div>
	 <div class="clear"></div>
	 
</div>
 		      <script>
	$(document).ready(function () {
    var rmarker = $('.ttt');

    $(window).scroll(function () {
        var y = $(this).scrollTop();
        var z = $('.ttt').offset().top;

        if (y >= z) {
	        
	         setTimeout(function(){ 
            $('#startrates').addClass('slideUp3');
             }, 0);
             
            
        }
        
    });
    });
</script>


<div class="next_cont_hotel_next">
				<div class="next_link"><a  data-looper="next" class="superlink"  href="#controlLooperX"></a></div>
				<div class="for_link"></div>
				<div class="papa bouncex"></div>
			</div>
			
			<div class="next_cont_hotel_prev">
				<div class="next_link"><a  data-looper="prev" class="superlink"  href="#controlLooperX"></a></div>
				<div class="for_link"></div>
				<div class="papa2 bouncex2"></div>
			</div>


<div id="controlLooperX" data-looper="go" class="looper xfade">
    <div class="looper-inner">
        
        <div class="item"><div class="one_room_pic st_1 htx_1"></div></div>
        <div class="item"><div class="one_room_pic st_2 htx_2"></div></div>
        <div class="item"><div class="one_room_pic st_3 htx_3"></div></div>
        
        
    </div>
   
</div>
</section>

		



			<section class="pluses">
				<div class="pluses_marker" style="position: absolute; background: red; width: 5px; height: 5px; margin-top: -55%;z-index: 6;visibility: hidden; "></div>
			<div class="pluses_inner">
				<div class="one_plus first_plus" id="pl1">
					<div class="plus_icon icon_1"></div>
					<div class="plus_text">
						<div class="text_h"><?print $lang['GEO_HEADER']?></div>
<?print $lang['GEO_TEXT']?>
</div>
				</div>
				<div class="one_plus" id="pl2">
					<div class="plus_icon icon_2"></div>
					<div class="plus_text">
						<div class="text_h"><?print $lang['ECO_HEADER']?></div>
<?print $lang['ECO_TEXT']?>
</div>
				</div>
				<div class="one_plus" id="pl3">
					<div class="plus_icon icon_3"></div>
					<div class="plus_text">
						<div class="text_h"><?print $lang['BATH_HEADER']?></div>
<?print $lang['BATH_TEXT']?></div>
				</div>
				<div class="clear"></div>
			</div>
		</section>
		
		
	
 		      <script>
	$(document).ready(function () {
    var rmarker = $('.pluses_marker');

    $(window).scroll(function () {
        var y = $(this).scrollTop();
        var z = $('.pluses_marker').offset().top;

        if (y >= z) {
	        
	         setTimeout(function(){ 
            $('#pl1').addClass('fadeTop');
             }, 200);
             
             setTimeout(function(){ 
            $('#pl2').addClass('fadeTop');
             }, 400);
             
             setTimeout(function(){ 
            $('#pl3').addClass('fadeTop');
             }, 600);
        }
        
    });
    });
</script>	
		




<?include('autoprice.php');?>


<section class="newrooms">
  
	
<div class="innew_1">
		<div class="new_open"><div class="open_icon"></div></div>
		<div class="allside">
	     <div class="new_side">
		   
		   <div class="ns_content">
			   <div class="ns_c_in">
				    <div class="rtop">
					    <div class="rt_l" id="s1"></div>
					    <div class="rt_c">
						    <div class="rlabel">
							    <div class="rnm"><?print $lang['STANDARD_ROOM_NAME']?></div>
							    <div class="rpr"><?print $standard_p;?> <span><?print $lang['CUR'];?></span></div>
							</div>
					    </div>
					    <div class="rt_r" id="s1x"></div>
					    <div class="clear"></div>
				    </div>
				    
				    
				    
				    
				<div class="rmid">
					    
					    
					    					 
					 <div style="font-size: 14px; color:#899499;">
						 <?print $lang['STANDARD_ROOM_ANNO']?>
					 </div>
					    
					    
					    
					    
					<div style="margin-top: 30px; ">
					   <?print $lang['ROOM_CONTENT_BLOCK_UL_LI']?>
					 <div class="clear"></div>  
					 </div>
					
					 
					 
					<div style="margin-top: 20px; float:left;">
					   <div class="room_params">
					   <div class="param"><?print $lang['ROOM_MAX']?>:<span>  <?print $lang['PERSONS']?> 3</span></div>
					   <div class="param"><?print $lang['SQUARE']?>:<span> 22 <?print $lang['METERS']?></span></div>
					   <div class="param"><?print $lang['RQ']?>:<span> 1 </span></div>
					   </div>
                    </div>
                    
                    <div id="ptable" class="pricetable"><?print $lang['SEASONS_TABLE']?></div>
                    <div class="clear"></div>
                    
                         
				 
				 
				 </div>
                     
					    
					    
					    
					    
					    
				   
				    <div class="rbot">
					    <div class="ns_but"><?print $lang['TO_BOOKING']?></div>
				    </div>
			   </div>
		   </div>
		   
		 
	     
	     
	     </div>
	     <div class="new_close"><div class="close_icon"></div></div>
	     <div class="clear"></div>
	    </div>
		
	<div class="slph">
		<div class="next_cont_hotel_next" style="margin-top: -10px!important;">
				<div class="next_link"><a  data-looper="next" class="superlink"  href="#controlLooperS1"></a></div>
				<div class="for_link"></div>
				<div class="papa bouncex"></div>
			</div>
		<div id="controlLooperS1" data-looper="go" class="looper xfade">
    <div class="looper-inner">
        
        <div class="item"><div class="one_room_pic stx_1"></div></div>
        <div class="item"><div class="one_room_pic stx_2"></div></div>
        <div class="item"><div class="one_room_pic stx_3"></div></div>
        <div class="item"><div class="one_room_pic stx_4"></div></div>
        <div class="item"><div class="one_room_pic stx_5"></div></div>
       
        
    </div>
   
</div>
        </div>
</div>
	
	
	
	
<div class="innew_2 off">
		<div class="new_open"><div class="open_icon"></div></div>
		<div class="allside">
	     <div class="new_side">
		   
		   <div class="ns_content">
			   <div class="ns_c_in">
				    <div class="rtop">
					    <div class="rt_l" id="s2"></div>
					    <div class="rt_c">
						    <div class="rlabel">
							    <div class="rnm"><?print $lang['FAMILY_ROOM_NAME']?></div>
							    <div class="rpr"><?print $family_p;?> <span><?print $lang['CUR'];?></span></div>
							</div>
					    </div>
					    <div class="rt_r" id="s2x"></div>
					    <div class="clear"></div>
				    </div>
				    
				    
				    
				    
				<div class="rmid">
					    
					    
					    					 
					 <div style="font-size: 14px; color:#899499;">
						 <?print $lang['FAMILY_ROOM_ANNO']?>
					 </div>
					    
					    
					    
					    
					<div style="margin-top: 30px; ">
					   <?print $lang['FAMILY_ROOM_UL_LI']?>
					 <div class="clear"></div>  
					 </div>
					
					 
					 
					<div style="margin-top: 20px; float:left;">
					   <div class="room_params">
					   <div class="param"><?print $lang['ROOM_MAX']?>:<span>  <?print $lang['PERSONS']?> 5</span></div>
					   <div class="param"><?print $lang['SQUARE']?>:<span> 32 <?print $lang['METERS']?></span></div>
					   <div class="param"><?print $lang['RQ']?>:<span> 2 </span></div>
					   </div>
                    </div>
                    
                    <div id="ptable" class="pricetable"><?print $lang['SEASONS_TABLE']?></div>
                    <div class="clear"></div>
                    
                         
				 
				 
				 </div>
                     
					    
					    
					    
					    
					    
				   
				    <div class="rbot">
					    <div class="ns_but"><?print $lang['TO_BOOKING']?></div>
				    </div>
			   </div>
		   </div>
		   
		 
	     
	     
	     </div>
	     <div class="new_close"><div class="close_icon"></div></div>
	     <div class="clear"></div>
	    </div>
		
	<div class="slph">
		<div class="next_cont_hotel_next" style="margin-top: -10px!important;">
				<div class="next_link"><a  data-looper="next" class="superlink"  href="#controlLooperS2"></a></div>
				<div class="for_link"></div>
				<div class="papa bouncex"></div>
			</div>
		<div id="controlLooperS2" data-looper="go" class="looper xfade">
    <div class="looper-inner">
        
        <div class="item"><div class="one_room_pic fmx_1"></div></div>
        <div class="item"><div class="one_room_pic fmx_2"></div></div>
        <div class="item"><div class="one_room_pic fmx_3"></div></div>
        <div class="item"><div class="one_room_pic fmx_4"></div></div>
        <div class="item"><div class="one_room_pic fmx_5"></div></div>
        <div class="item"><div class="one_room_pic fmx_6"></div></div>
        <div class="item"><div class="one_room_pic fmx_7"></div></div>
        <div class="item"><div class="one_room_pic fmx_8"></div></div>
        <div class="item"><div class="one_room_pic fmx_9"></div></div>
       
        
    </div>
   
</div>
        </div>
</div>	
	
	
	
	
	
	
	
	
	
	
	
	
 
</section>





<script>
$("#s1").click(function(){
         $(".innew_1").fadeOut(700);
         setTimeout(function(){
         $(".innew_2").fadeIn(700);
         },750);
});	
$("#s1x").click(function(){
         $(".innew_1").fadeOut(700);
         setTimeout(function(){
         $(".innew_2").fadeIn(700);
         },750);
});
	
$("#s2").click(function(){
         $(".innew_2").fadeOut(700);
         setTimeout(function(){
         $(".innew_1").fadeIn(700);
         },750);
});	

$("#s2x").click(function(){
         $(".innew_2").fadeOut(700);
         setTimeout(function(){
         $(".innew_1").fadeIn(700);
         },750);
});		
	
	
	
$(".new_close").click(function(){
         $(".allside").hide( "slide", { direction: "left"  }, 500 );
         setTimeout(function(){
         $(".new_open").show( "slide", { direction: "left"  }, 200 );
         },550);
});

$(".new_open").click(function(){
         $(".new_open").hide( "slide", { direction: "left"  }, 200 );
         setTimeout(function(){
         $(".allside").show( "slide", { direction: "left"  }, 500 );
         },250);
});

</script>




<script src="js/rooms.js"></script>


 		      <script>
	$(document).ready(function () {
    var rmarker = $('.crea_marker');

    $(window).scroll(function () {
        var y = $(this).scrollTop();
        var z = $('.crea_marker').offset().top;

        if (y >= z) {
	        
	         setTimeout(function(){ 
            $('.next_cont_s').addClass('slideUp3');
             }, 500);
             
             setTimeout(function(){ 
            $('.creative_side').addClass('slideRight2');
             }, 200);
        }
        
    });
    });
</script>


	
		
		
	<script>
	$(".ns_but").click(function() {
	
	$('html, body').animate({
        scrollTop: $("#bookme").offset().top
    }, 700);
});
	</script>	

 

 
 
 
                  
	
	 
   <div id="bookme" >
	   <div class="big_header_b" style="padding-top:100px;"><?print $lang['BOOKING_HEADER']?></div>
	   
	   
	                
	   
	   <form id="clb1" method="post" action=""  class="form_check"> 
   
    <div class="yoho">
	    
	    
	    <div class="fields">
		    <div class="field_label"><?print $lang['CHOOSE_ROOM_TYPE']?></div>
                     <div class="room_type rline rcheck">
				      <div class="room_first sel"><?print $lang['STANDARD_ROOM_NAME']?><input checked id="room_1" type="radio" value="standard" name="room" class="rfield off"/></div>
			          <div class="room_second"><?print $lang['FAMILY_ROOM_NAME']?><input id="room_2" type="radio" value="family" name="room" class="rfield off"/></div>
			          </div>
<div class="clear"></div>

                    <div class="inpfields">
	                    <div class="field_label"><?print $lang['CHOOSE_PERSONS']?></div>
                       <input type="text" id="ad" name="ad" autocomplete="off" class="each min nomargin rfield" maxlength="2" onkeypress="return isNumberKey(event)" placeholder="<?print $lang['PLACEHOLDER_ADULTS']?>"/>
                       <input type="text" id="kd" name="kd" autocomplete="off" class="each min nomargin last" maxlength="2" onkeypress="return isNumberKey(event)" placeholder="<?print $lang['PLACEHOLDER_KIDS']?>"/>
                       <div  class="field_label"><?print $lang['CHOOSE_CONTACTS']?></div>
                       <input type="text" id="fn" name="fn" autocomplete="off" class="each rfield nomargin" placeholder="<?print $lang['PLACEHOLDER_NAME']?>"/>
                       <input type="text" id="ph" name="ph" autocomplete="off" class="each rfield phonefield" placeholder="<?print $lang['PLACEHOLDER_PHONE']?>"/>
                       </div>
                    
                   
                    
                       <button  class="booking_ok btnsubmit"><?print $lang['TO_BOOKING']?></button>
                       
                       <div id="ptable2" class="pricetable2"><?print $lang['SEASONS_TABLE']?></div>
                    
                    </div>
                    
                    
                    

	 
	    
	    <div class="trigger"> <input id="datepicker" class="rfield" name="e1"/></div></div>
    
    
    
    
                             <script>
	                             
	                           $("#ptable, #ptable2").click(function() {
                               $('body').addClass('noflow');
                               $('.seasons').fadeIn(0).addClass("slideUp2");
                               });
                               
                               
                               
                               $(".close_seasons").click(function() {
                               $('body').removeClass('noflow');
                               $('.seasons').fadeOut(400);
                               setTimeout(function(){ 
                               $('.seasons').removeClass("slideUp2");
                               }, 401);
                               });
                           </script>
            
            
            
            <script type="text/javascript">
                function isNumberKey(evt) {
                    var charCode = (evt.which) ? evt.which : event.keyCode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                        return false;
                    return true;
                }
            </script>
    
    
    
    
    <script>
	$(".ov").click(function() {
		$("#datepicker").daterangepicker("clearRange");
		$('.all_ok').addClass('off');
		$('.popup').addClass('off');
		$('#ad,#kd,#fn,#ph').val('');
		$("#room_1").attr('checked', true);
		$("#room_2").attr('checked', false);
		$('.sel').removeClass('sel');
		$(".room_first").addClass('sel');
		$('body').removeClass('noflow');
		$('.ov').fadeOut(400);
	});
    </script>
    
    <script>
	$(".ov2").click(function() {
		$('.popup').addClass('off');
		$('body').removeClass('noflow');
		$('.ov2').fadeOut(400);
	});
    </script>
    
    
    	<script>    
                $('.room_first').click(function () {
                    
                    $('.sel').removeClass('sel');
                    $(this).addClass('sel').find('input').prop('checked', true)
                });
                $('.room_second').click(function () {
                    
                    $('.sel').removeClass('sel');
                    $(this).addClass('sel').find('input').prop('checked', true)
                });
</script>
    

    
    
    
    
      </form>
    
    </div>
		
		
		
		
		
		
<?include('map.php');?>


	
	
	
	
	<?include ('footer.php');?>
	
	

<script>
$.ajax({
url: 'rates/fsq_s.php',
success: function(data) {
$('.fsq_s').html(data);
}
});

$.ajax({
url: 'rates/bok_s.php',
success: function(data) {
$('.bok_s').html(data);
}
});
</script> <!---RATINGS START--->
	


<script>
$.ajax({
url: 'rates/fsq.php',
success: function(data) {
$('.fsq').html(data);
}
});

$.ajax({
url: 'rates/bok.php',
success: function(data) {
$('.bok').html(data);
}
});
</script> <!---RATINGS--->	

  
  
  
  
  
  
  	   <script>
	 $(window).load(function () { $("#datepicker").daterangepicker("open"); });
	 $(document).ready(function(){
	     
      $("#datepicker").daterangepicker({
	  presetRanges:false,
      //applyOnMenuSelect: true,
      mirrorOnCollision: false,
      //verticalOffset:0,
      //autoFitCalendars:false,
      
      
      
      datepickerOptions: {
         minDate: 0,
         maxDate: "+12m +2w",
         numberOfMonths: 2,
         <?print $lang['CALENDAR']?>
         
       }
      
      
      });
  
     });
    </script><!--DATEPICKER-->
    
    
 <script src="js/is.mobile.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/formcheck.js"></script>   

<script>
	//$(window).on('load', function () {
	
                     	
                     	$( document ).ready(function() {
	                    setTimeout(function(){
                        $('.ml').addClass("fadeTop");
                         },50);
                     	});
	
	
	});
</script>


<?
	$source = mysql_query("SELECT * FROM hot  WHERE id='1'");
    while($rowx = mysql_fetch_array($source)){
	$head = $rowx["$hot_title"];
    $text = $rowx["$hot_text"];

}
	
	
?>



<div class="popup off" style="background:#fff">
<div class="hot_head"><?print $head;?></div>
<div class="hot_text"><?print $text;?></div>
</div>











<?
	if ($ds === 'on'){
		if ($detect != 'hot offer'){?>
		
		<script>  
(function($) {  
$(function() {  
  
  // check cookie 
  if (!$.cookie('was')) {  
  
  
  setTimeout(function() {
              $('body').addClass('noflow');
              $('.popup').removeClass('off');
              $('.ov2').fadeIn(400);
              $('.popup').addClass('fadeTop');
}, 5000);
  
   //show popup
             
  
  } 
  else{
	  
  } 
  
  $.cookie('was', true, {  
    expires: 1,  
    path: '/'  
  });  
  
})  
})(jQuery)  
</script>
		
			
		<?}
	}
?>







<!--
<script>  
(function($) {  
$(function() {  
  
  // check cookie 
  if (!$.cookie('was')) {  
  
  
  setTimeout(function() {
              $('body').addClass('noflow');
              $('.popup').removeClass('off');
              $('.ov2').fadeIn(400);
              $('.popup').addClass('fadeTop');
}, 5000);
  
   //show popup
             
  
  } 
  else{
	  
  } 
  
  $.cookie('was', true, {  
    expires: 1,  
    path: '/'  
  });  
  
})  
})(jQuery)  
</script>
						
					-->




















<script>
	$(window).scroll(function(e){
  parallax();
});
function parallax(){
  var scrolled = $(window).scrollTop();
  $('.parallax').css('top',-(scrolled*0.35)+'px');
}
</script><!--PARALLAX-->


<?include ('analytics.php');
	
	
$gx = preg_replace("'<plaintext>'si","",$code_google);
$gx2 = preg_replace("'</plaintext>'si","",$gx);
print $gx2;

$yx =  preg_replace("'<plaintext>'si","",$code_yandex);
$yx2 = preg_replace("'</plaintext>'si","",$yx);
print $yx2;
	
	
?>





</body>
</html>	
<?// include ('endcash.php')?>