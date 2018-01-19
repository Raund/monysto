
<?
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start(); 
if(login_check($mysqli) == true) {
?>

<?
    include('admin_files/db.php');
?>

<?
$allcats = mysql_query("SELECT * FROM alc_cats");
while($rowshop = mysql_fetch_array($allcats)){
$catsarray[] = $rowshop["id"];
$cats = $catsarray;
}
?>

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

<section class="editbody">
	<div class="selector">
	<div class="fewannotation">
		Новая категория создается с неактивным статусом, чтобы не отображать в меню пустые категории. Добавьте в новую категорию соответсвующие напитки, а затем сделайте категорию активной , установив статус «ON» в списке категорий.
	</div>
</div>

<h1>Новая категория для бара</h1>

<script>
$('#addnewcat').ajaxForm(function(msg){
if(msg === 'stop'){
	
		        $("body").addClass('noflow');
	            $('.pop').fadeIn(400);
	            $('#no').fadeIn(400);
	            setTimeout(function(){ 
                $("body").removeClass('noflow');
                $(".pop").fadeOut(400);
                $('#no').fadeOut(400);
                }, 1500);
                // setTimeout(function(){ 
               // $('#result').load('03_eat.php');
               // }, 1500);
                
                	
	            
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
                
                setTimeout(function(){ 
                 document.getElementById('backlink').click();
                }, 2000);
               
                
	           } 
	           
	        });
</script>

<form id="addnewcat" method="post" action="admin_files/newcatname_bar.php">
		<div><input class="newcatinp" type="text" name="newcat_ru" placeholder="RU"></div>
	    <div><input class="newcatinp" type="text" name="newcat_ua" placeholder="UA"></div>
        <div><input class="newcatinp" type="text" name="newcat_en" placeholder="EN"></div>
	<button type="submit" class="save2" style="margin-top: 40px;">Добавить</button>
</form>

<br><a class="back" id="backlink" href="/origin/root.php?param=bar">Вернуться</a>


</section>





</body>
</html>





<?
} else { 
        echo 'No, no, no!';
}
?>