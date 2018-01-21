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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <meta name="viewport" content="width=1200" > -->
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
		<div class="button-menu"><div class="menu-i icon"></div>MENU</div>
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
				<li><a href="http://monysto.loc/hotel.php?lang=en">en</a></li>
				<li><a href="http://monysto.loc/hotel.php?lang=ua">ua</a></li>
				<li><a href="http://monysto.loc/hotel.php?lang=ru">ru</a></li>
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
				<?print $lang['BATH_TEXT']?>
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
  			} else {} 
  
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