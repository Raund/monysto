<?

	include('langs/l.php');
	//include('startcash.php');
?>



<!DOCTYPE html>
<html>
<head>
<title><?print $lang['P_HEADER'];?></title>
<META HTTP-EQUIV="Content-language" CONTENT="<?echo $lang['P_LOCALE'];?>">
<base href="/">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="<?echo $lang['P_DESC'];?>"> 
<meta name="keywords" content="<?echo $lang['P_KEYS'];?>"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <meta name="viewport" content="width=1200" > -->
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/style2.css" rel="stylesheet" type="text/css" media="screen,print"/>
<link href="css/r-adaptive-style.min.css" rel="stylesheet" type="text/css" media="screen,print"/>
<link href="css/animation.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.3.1/moment.min.js"></script>

<script src="//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>  

<link href="css/looper.css" rel="stylesheet">
<script src="js/looper.js"></script>

<script src="js/video.js"></script>

<script src="js/c.js"></script>

				
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

<div class="all_ok off">
	<div class="message"><?print $lang['P_THANKS'];?></div>
	<div class="mes_comm"><?print $lang['P_TH_TEXT'];?></div>
</div>
<div class="ov"></div>
<div class="ov2"></div>

<script>
//        $('body').addClass('noflow');
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
				url: "/table_res.php",
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
		<div class="button-menu button-menu_pizza"><div class="menu-i icon"></div>MENU</div>
		<div class="nav r-nav-pizza">
			<ul>
				<li id="toabout"><?print $lang['P_ABOUT'];?></li>
				<li id="tocrew"><?print $lang['P_CREW'];?></li>
				<li id="tomenu"><?print $lang['P_MENU'];?></li>
				<li id="toreserve"><?print $lang['P_RESERVE'];?></li>
				<li id="tocontacts"><?print $lang['P_CONTACT'];?></li>
				<li><a href="http://monysto.com/hotel/"><?print $lang['P_HOTEL'];?></a></li>
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
					$strSQL = "SELECT status FROM hot WHERE id=2";
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
				<li><a href="http://monysto.com/pizza.php?lang=en">en</a></li>
				<li><a href="http://monysto.com/pizza.php?lang=ua">ua</a></li>
				<li><a href="http://monysto.com/pizza.php?lang=ru">ru</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
	
<script>  
	/**********open-close menu**************/
	$('.button-menu').click(function(){
		$(this).toggleClass('active');
		$('.nav').toggleClass('active');
		$('.button-menu .icon').toggleClass('menu-i').toggleClass('close');
	});
	/**********END open-close menu**************/

	$("#toabout").click(function() {
		// $('#video').fadeOut(500);
		$('html, body').animate({
			scrollTop: $(".first_text").offset().top
		}, 700);
	});
	$("#tocrew").click(function() {
		// $('#video').fadeOut(500);
		$('html, body').animate({
			scrollTop: $(".chief").offset().top
		}, 1000);
	});
	$("#tomenu").click(function() {
		// $('#video').fadeOut(500);
		$('html, body').animate({
			scrollTop: $(".food_menu").offset().top
		}, 1000);
	});
	$("#toreserve").click(function() {
		//$('#video').fadeOut(500);
		$('html, body').animate({
			scrollTop: $("#res_table_marker").offset().top
		}, 1000);
	});
	$("#tocontacts").click(function() {
		//$('#video').fadeOut(500);
		$('html, body').animate({
			scrollTop: $("footer").offset().top
		}, 1000);
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
	
<section class="first_pizza">
	<div class="overfirst">
		<div class="ml"></div>
		<div class="swiper-pagination swiper-pagination-white superpages"></div>
	</div> 
	
	<!--<div id="video">
	<div id="video-bg-container" class="full-screen hidden-phone" style="position:absolute!important; z-index:0; background: red url('../images/pizza/mainp.jpg')center center no-repeat; background-size: cover;">
	<video autoplay loop muted id="myVideo"  autobuffer preload="auto" poster="video/snow_bg.jpg">
		<source src="video/sn2.mp4" type="video/mp4">
		<source src="video/sn2.ogv" type="video/ogg">
		<source src="video/sn2.webm" type="video/webm">
		<span class="no-video"></span>
	</video>
	</div>
	</div>-->
	
	<div class="startdown"><div class="mama bouncexdown"></div></div>
	<script>      
		$(".startdown").click(function() {
		//   $('#video').fadeOut(500);
			$('html, body').animate({
				scrollTop: $(".first_text").offset().top
			}, 700);
		});
	</script>

	<!--<script>
		$(document).ready(function () {
			var video = $('#video');
			$(window).scroll(function () {
				var y = $(this).scrollTop();
				var z = $('.first_text').offset().top;
				if (y >= z) {
					video.addClass('off');
					video.fadeOut(400);
				} else {
					video.removeClass('off');
					video.fadeIn(500);
				}
			});
		});
	</script>-->
	
</section>
	
<section class="first_text">
	<div class="first_text_inner">
		<div class="big_header_b"><?print $lang['P_AB_HEADER'];?></div>
		<div class="about_text_b">
			<?print $lang['P_AB_TEXT'];?>
		</div>
		<div class="orn"></div>
	</div>
</section>	
	
<section class="food_pics">
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
			<div class="item"><div class="one_room_pic p_1"></div></div>
			<div class="item"><div class="one_room_pic p_2"></div></div>
			<div class="item"><div class="one_room_pic p_3"></div></div>
			<div class="item"><div class="one_room_pic p_11"></div></div>
		</div>
	</div>
</section>
	
<section class="pluses">
	<div class="pluses_marker" style="position: absolute; background: red; width: 5px; height: 5px; margin-top: -50%;z-index: 6;visibility: hidden; "></div>
	<div class="pluses_inner">
		<div class="one_plus first_plus" id="pl1x">
			<div class="plus_icon_pizza icon_1p"></div>
			<div class="plus_text">
				<div class="text_h"><?print $lang['P_1'];?></div>
					<?print $lang['P_1_ANNO'];?>
			</div>
		</div>
		<div class="one_plus" id="pl2x">
			<div class="plus_icon_pizza icon_2p"></div>
			<div class="plus_text">
				<div class="text_h"><?print $lang['P_2'];?></div>
				<?print $lang['P_2_ANNO'];?>
			</div>
		</div>
		<div class="one_plus" id="pl3x">
			<div class="plus_icon_pizza icon_3p"></div>
			<div class="plus_text">
				<div class="text_h"><?print $lang['P_3'];?></div>
				<?print $lang['P_3_ANNO'];?>
			</div>
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
					$('#pl1x').addClass('fadeTop');
				}, 300);
				setTimeout(function(){ 
					$('#pl2x').addClass('fadeTop');
				}, 400);
				setTimeout(function(){ 
					$('#pl3x').addClass('fadeTop');
				}, 600);
			}
		});
    });
</script>	

<section class="food_pics">
	<div class="next_cont_hotel_next">
		<div class="next_link"><a  data-looper="next" class="superlink"  href="#controlLooperY"></a></div>
		<div class="for_link"></div>
		<div class="papa bouncex"></div>
	</div>
	<div class="next_cont_hotel_prev">
		<div class="next_link"><a  data-looper="prev" class="superlink"  href="#controlLooperY"></a></div>
		<div class="for_link"></div>
		<div class="papa2 bouncex2"></div>
	</div>
	<div id="controlLooperY" data-looper="go" class="looper xfade">
		<div class="looper-inner">
			<div class="item"><div class="one_room_pic p_5"></div></div>
			<div class="item"><div class="one_room_pic p_6"></div></div>
			<div class="item"><div class="one_room_pic p_7"></div></div>
			<div class="item"><div class="one_room_pic p_8"></div></div>
			<div class="item"><div class="one_room_pic p_9"></div></div>
			<div class="item"><div class="one_room_pic p_10"></div></div>
		</div>
	</div>
</section>	
	
<section class="additional">
	<div id="prate_marker" style="width: 5px; height: 5px; background: red; position: absolute; z-index: 10; margin-top: -25%; visibility: hidden;"></div>
	<div class="add_inner">
		<div id="pizzarates" style="visibility: hidden;">
			<div class="fsq_sx" style="cursor: pointer;"></div>
			<div class="pizzarate_text"><?print $lang['P_FEEDS'];?></div>
			<div class="clear"></div>
		</div>
 		<script>
			$(document).ready(function () {
				var rmarker = $('#prate_marker');
				$(window).scroll(function () {
					var y = $(this).scrollTop();
					var z = $('#prate_marker').offset().top;
					if (y >= z) {
						setTimeout(function(){ 
							$('#pizzarates').addClass('slideUp3');
						}, 0);
					}
				});
			});
		</script>
	</div>
</section>
	
<section class="chief">
	<div class="chief_inner">
		<div class="topmar"></div>
		<div class="chief_text">
			<div class="chief_header"><?print $lang['P_CREW_HEADER'];?></div>
			<?print $lang['P_CREW_TEXT'];?>				
		</div>
	</div>
</section>
			
<?include('menu_x.php');?>
	
<section class="table_reserve">
	<div id="res_table_marker" style="width: 5px; height: 5px; position: absolute; margin-top: -70px; visibility: hidden;"></div>
	<div id="res_table_marker2" style="width: 5px; height: 5px; position: absolute; margin-top: -25%; visibility: hidden;"></div>
	<div class="trh"><?print $lang['P_RES_HEADER'];?></div>
	<div class="pizza_form" style="visibility: hidden;">	
		<form id="clb1" class="form_check" method="post" action="">
			<div class="piz_inp"><input type="text" id="fn" name="name"  autocomplete="off" class="each each_pizza rfield"  placeholder="<?print $lang['P_PH_NAME'];?>"/></div>
			<div class="piz_inp_2"><input type="text" id="ph" name="phone"  autocomplete="off" class="each each_pizza rfield phonefield"  placeholder="<?print $lang['P_PH_PHONE'];?>"/></div>
			<div class="clear"></div>
			<button  class="pizza_ok btnsubmit"><?print $lang['P_PH_OK'];?></button>
		</form>
	</div>	
</section>
	
<script>
	$(document).ready(function () {
		var rmarker = $('#res_table_marker2');
		$(window).scroll(function () {
			var y = $(this).scrollTop();
			var z = $('#res_table_marker2').offset().top;
			if (y >= z) {
					setTimeout(function(){ 
				$('.pizza_form').addClass('slideUp3');
					}, 300);
			}
		});
	});
</script>
	
<script>
	$(".ov").click(function() {
		$('.all_ok').addClass('off');
		$('.popup').addClass('off');
		$('#fn,#ph').val('');
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
		
<?include('map.php');?>
	
<?include ('footer.php');?>

<script>
	$.ajax({
		url: 'rates/fsq_sx.php',
		success: function(data) {
			$('.fsq_sx').html(data);
		}
	});
	$.ajax({
		url: 'rates/bok_s.php',
		success: function(data) {
			$('.bok_s').html(data);
		}
	});
</script> <!-- RATINGS START -->

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
</script> <!-- RATINGS -->	
    
<script src="js/is.mobile.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/formcheck.js"></script>   

<?
	$source = mysql_query("SELECT * FROM hot  WHERE id='2'");
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
						} else {} 
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