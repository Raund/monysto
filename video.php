<?
	
	$n = date('m');
	//$n = '10';
	$nx = (int) $n;
	 
	if ($nx >= '4' && $nx <= '9' ){
		
	?>

<div class="overlay" style="position: absolute; width: 100%; height: 100%; z-index:2; background:  url('images/grid5.pngx'); opacity: 0.9;">
	<div style="height: 150px; width: 1000px; text-align: center; position: absolute; top:50%; left:50%; margin-top: -30px; margin-left: -500px; color:#fff; font-size: 120px; font-family: Pblack;  letter-spacing: -2px; ">МОNYSTO</div>
</div>	

<div id="video-bg-container" class="full-screen hidden-phone" style="position:absolute!important; z-index:0; background: #000 url('video/mount.jpg')center center no-repeat; background-size: cover;">

<video autoplay loop muted id="myVideo"  autobuffer preload="auto" poster="video/mount.jpg">
	        <source src="video/summer.mp4" type="video/mp4">
			<source src="video/sn2x.ogv" type="video/ogg">
			<source src="video/sn2x.webm" type="video/webm">
			<span class="no-video"></span>
</video>

</div>	
		
	<?}
	else
	{
		
	?>


<div class="overlay" style="position: absolute; width: 100%; height: 100%; z-index:2; background:  url('images/grid5.pngx'); opacity: 0.9;">
	<div style="height: 150px; width: 1000px; text-align: center; position: absolute; top:50%; left:50%; margin-top: -30px; margin-left: -500px; color:#fff; font-size: 120px; font-family: Pblack;  letter-spacing: -2px; ">МОNYSTO</div>
</div>		
	
<div id="video-bg-container" class="full-screen hidden-phone" style="position:absolute!important; z-index:0; background: #000 url('video/mount.jpg')center center no-repeat; background-size: cover;">

<video autoplay loop muted id="myVideo"  autobuffer preload="auto" poster="video/mount.jpg">
	        <source src="video/winter.mp4" type="video/mp4">
			<source src="video/sn2.ogv" type="video/ogg">
			<source src="video/sn2.webm" type="video/webm">
			<span class="no-video"></span>
</video>

</div>
	
	
<?	
	}
	
?>



	   








