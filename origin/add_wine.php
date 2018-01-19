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
$allcats = mysql_query("SELECT * FROM vine_cats");
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
	
<script>
$('#addfood').ajaxForm(function(msg){
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


<section class="editbody">
	
	<div class="selector">
	<div class="fewannotation">
		Все поля должны быть заполнены, кроме поля «ингридиенты». Единицы измерения могут быть любыми: литры, граммы, порции, штуки и т.д. Для каждого языка указываются отдельно: миллилитр — мл (по-русски), ml (по-английски), мл (по-украински). Названия блюд могут быть заключены в кавычки-елочки («Название»), ингредиенты лучше указывать в круглых скобках. Цену можно указывать с копейками и без. При указании цены без копеек она будет отображаться в виде 100.00 
	</div>
</div>


<h1>Добавить новое вино</h1>
	
	
	
	
	<form id="addfood" method="post" action="admin_files/add_new_wine.php">
		
		
			<div class="select-style3" style="margin-top: 50px; margin-bottom: 30px;">
			<select name="cat_id">
	 <option value="" disabled selected>Выбрать категорию для напитка</option>	
	<?
	foreach ($cats as $cat){
$source = mysql_query("SELECT * FROM vine_cats WHERE id='$cat'");
while($rowx = mysql_fetch_array($source)){
$cat_id = $rowx['id'];
$cat_name = $rowx['vinecat_ru'];
$cat_status = $rowx['status'];

?>
	<option value="<?print $cat_id?>"><?print $cat_name?></option>
<?
}
unset($cat);
		}
		?>
</select>
		</div>	
		
		

		
		
		
	
	<div class="langblock">
	 <div class="st_text2">ru</div>
	 <div class="st_header2"></div>
	
	<div class="editblock-names" >
		<div><input class="editinp1" type="text" name="name_ru" value="" placeholder="«Название»"></div>
		<div><input class="editinp2" type="text" name="str_ru" value="" placeholder="(ингридиенты)"></div>
		<div class="editblock-w">
		<input class="editinp3" type="text" name="ci_ru" value=""><span>единица измерения</span> 
		</div>
	</div>
	</div>
	
	
	<div class="langblock">
	 <div class="st_text2">ua</div>
	 <div class="st_header2"></div>
	
	<div class="editblock-names">
		<div><input class="editinp1" type="text" name="name_ua" value="" placeholder="«Назва»"></div>
		<div><input class="editinp2" type="text" name="str_ua" value="" placeholder="(інгридієнти)"></div>
		<div class="editblock-w">
		<input class="editinp3" type="text" name="ci_ua" value=""><span>одиниця вимірювання</span> 
		</div>
	</div>
	</div>
	
	
	
	
	
	<div class="langblock">
	 <div class="st_text2">en</div>
	 <div class="st_header2"></div>
	
	<div class="editblock-names">
		<div><input class="editinp1" type="text" name="name_en" value="" placeholder="«Name»"></div>
		<div><input class="editinp2" type="text" name="str_en" value="" placeholder="(ingredients)"></div>
		<div class="editblock-w">
		<input class="editinp3" type="text" name="ci_en" value=""><span>unit of measure</span> 
		</div>
	</div>
	</div>
	
	
	<div class="editglobal">
		<div class="st_text2">Global</div>
	    <div class="st_header2"></div>
		

		
		
		
		<div class="globalrow"><input class="editinp3" type="text" name="w" value=""><span>Вес/объем</span></div>
		<div class="globalrow"><input class="editinp3" type="text" name="price" value=""><span>Цена в гривнах</span></div>
		
		
	    <div  class="select-style2">
		<select name="status">
			 <option value="on" >ON</option>
			 <option value="off" selected>OFF</option> 
		</select>
		</div> 
		
		
	
	   
	
	</div>
	<button type="submit" class="save2" style="margin-top: 40px;">Добавить</button>
	</form>
	
	<br><a class="back" id="backlink" href="/origin/root.php?param=wine">Вернуться</a>
	
	
	
	
	
	
</section>


















</body>
</html>


<?
} else { 
        echo 'No, no, no!';
}
?>