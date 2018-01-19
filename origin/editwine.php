<?
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start(); 
if(login_check($mysqli) == true) {
?>




<?
    include('admin_files/db.php');
	
	$param_id = $_GET['id'];
	
	
$source = mysql_query("SELECT * FROM vine_items WHERE id='$param_id'");
while($rowx = mysql_fetch_array($source)){
$id = $rowx['id'];
$cat_id = $rowx['vinecat_id'];

$name_ua = $rowx['vine_name_ua'];
$str_ua = $rowx['structure_ua'];
$ci_ua = $rowx['w_ci_UA'];

$name_en = $rowx['vine_name_en'];
$str_en = $rowx['structure_en'];
$ci_en = $rowx['w_ci_EN'];

$name_ru = $rowx['vine_name_ru'];
$str_ru = $rowx['structure_ru'];
$ci_ru = $rowx['w_ci_RU'];


$w = $rowx['weight'];
$price = $rowx['price'];
$status = $rowx['status'];
}

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
$('#saveeat').ajaxForm(function(msg){
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
		Цена и статус сохраняются автоматически при изменении. Нужно изменить цену и кликнуть в любом месте страницы, в том числе это может поле с ценой другой позиции. Поле с ценой не может быть пустым. В данном случае будет выведено сообщение об ошибке и возвращено предыдущее значение.
	</div>
</div>

<h1>Редактировать вино</h1>
	
	
	
	<form id="saveeat" method="post" action="admin_files/edit_one_wine.php">

<div class="select-style3">		
<select name="cat_id">

<?
foreach ($cats as $cat){
				
				
$source = mysql_query("SELECT * FROM vine_cats WHERE id='$cat'");
while($rowx = mysql_fetch_array($source)){
$catid = $rowx['id'];
$catname = $rowx['vinecat_ru'];
}

if ($catid == $cat_id){
	
	?>
   <option value="<?print $catid;?>" selected><?print $catname;?></option>	
<?	
}
else{?>
	
	<option value="<?print $catid;?>"><?print $catname;?></option>	
<?
	}


unset($cat);	
			}
		?>
		
</select>		
</div>		
		
		
		
		
		
		<input type="text" value="<?print $id?>" name="realid" hidden>
	<div class="langblock">
	 <div class="st_text2">ru</div>
	 <div class="st_header2"></div>
	
	<div class="editblock-names" >
		<div><input class="editinp1" type="text" name="name_ru" value="<?print $name_ru?>" placeholder="«Название»"></div>
		<div><input class="editinp2" type="text" name="str_ru" value="<?print $str_ru?>" placeholder="(ингридиенты)"></div>
		<div class="editblock-w">
		<input class="editinp3" type="text" name="ci_ru" value="<?print $ci_ru?>"><span>единица измерения</span> 
		</div>
	</div>
	</div>
	
	
	<div class="langblock">
	 <div class="st_text2">ua</div>
	 <div class="st_header2"></div>
	
	<div class="editblock-names">
		<div><input class="editinp1" type="text" name="name_ua" value="<?print $name_ua?>" placeholder="«Назва»"></div>
		<div><input class="editinp2" type="text" name="str_ua" value="<?print $str_ua?>" placeholder="(інгридієнти)"></div>
		<div class="editblock-w">
		<input class="editinp3" type="text" name="ci_ua" value="<?print $ci_ua?>"><span>одиниця вимірювання</span> 
		</div>
	</div>
	</div>
	
	
	
	
	
	<div class="langblock">
	 <div class="st_text2">en</div>
	 <div class="st_header2"></div>
	
	<div class="editblock-names">
		<div><input class="editinp1" type="text" name="name_en" value="<?print $name_en?>" placeholder="«Name»"></div>
		<div><input class="editinp2" type="text" name="str_en" value="<?print $str_en?>" placeholder="(ingredients)"></div>
		<div class="editblock-w">
		<input class="editinp3" type="text" name="ci_en" value="<?print $ci_en?>"><span>unit of measure</span> 
		</div>
	</div>
	</div>
	
	
	<div class="editglobal">
		<div class="st_text2">Global</div>
	    <div class="st_header2"></div>
		
		<div class="globalrow"><input class="editinp3" type="text" name="w" value="<?print $w?>"><span>Вес/объем</span></div>
		<div class="globalrow"><input class="editinp3" type="text" name="price" value="<?print $price?>"><span>Цена в гривнах</span></div>
		
		
		<div  class="select-style2">
		<select name="status">
			 <?if ($status == 'on'){?>
				 
			 <option value="on" selected>ON</option>
			 <option value="off" >OFF</option> 
				 
				 
				 
			 <?}	
			 else{?>
			 <option value="on">ON</option>
			 <option value="off" selected>OFF</option>
			<? }?>
		</select>
		</div> 
	   
	
	</div>
	<button type="submit" class="save2" style="margin-top: 40px;">Сохранить</button>
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