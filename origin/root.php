<?
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start(); 
if(login_check($mysqli) == true) {
?>
        
        
<?$param = $_GET['param'];?>






<!DOCTYPE html>
<html>
    <head>
        <title>Monysto Root</title>
        <link rel="stylesheet" href="styles/admin.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'> 
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

</head>
<body>


<div class="pop off">
	<div class="inpop off" id="no">Проверь поля!</div>
	<div class="inpop off" id="yes">Сохранено</div>
</div>
	
<?include ('admin_files/header.php');?>



<div class="content">
	<div class="content_inner">
		
		
	  <div id="loader" class="off">
		  <div class="lbar"></div>
	  </div>
	  
	  
	  
	  <div id="result"></div>
	
	
	</div>
</div>


<script type="text/javascript">




var param = "<? echo $param ?>";

if (param === 'eat'){
$(document).ready(function(){
$('#result').load('03_eat.php');	
$("#eat").addClass('active');
});
}

else if (param === 'bar'){
$(document).ready(function(){
$('#result').load('05_bar.php');	
$("#bar").addClass('active');
});
}

else if (param === 'wine'){
$(document).ready(function(){
$('#result').load('06_wine.php');	
$("#wine").addClass('active');
});
}



else{
$(document).ready(function(){
$('#result').load('04_rooms.php');	
$("#rooms").addClass('active');
});	
	
};






//$(document).ready(function(){
//$('#result').load('03_eat.php');	
//$("#eat").addClass('active');
//});
		


$('#seo').click(function(){
$('#result').load('01_seo.php');
$('.innavi').removeClass('active');
$(this).addClass('active');
});



$('#hot').click(function(){
	$('#result').load('02_hot.php');
//$('#result').load( "02_hot.php",  function(responseTxt, statusTxt, xhr) {
//	$("#loader").fadeIn(0);
//	if(statusTxt == "success")
//    setTimeout(function(){ 
//    $("#loader").fadeOut(400);
//   }, 1000);	
//});
$('.innavi').removeClass('active');
$(this).addClass('active');
});




$('#eat').click(function(){
$('#result').load('03_eat.php');
$('.innavi').removeClass('active');
$(this).addClass('active');
});

$('#rooms').click(function(){
$('#result').load('04_rooms.php');
$('.innavi').removeClass('active');
$(this).addClass('active');
});

$('#bar').click(function(){
$('#result').load('05_bar.php');
$('.innavi').removeClass('active');
$(this).addClass('active');
});

$('#wine').click(function(){
$('#result').load('06_wine.php');
$('.innavi').removeClass('active');
$(this).addClass('active');
});

</script>        
        
        
        
</body>
</html>  
















<?
} else { 
        echo 'No, no, no!';
}
?>