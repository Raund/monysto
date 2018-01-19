
<!DOCTYPE html>
<html>
<head>
<title>PIZZA</title>
<META HTTP-EQUIV="Content-language" CONTENT="<?echo $lang['LOCALE'];?>">
<base href="/">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="<?echo $lang['DESCRIPTION'];?>"> 
<meta name="keywords" content="<?echo $lang['KEYWORDS'];?>"> 
<meta name="viewport" content="width=1200, initial-scale=1" >
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/style2.css" rel="stylesheet" type="text/css" media="screen,print"/>
<link href="css/animation.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.3.1/moment.min.js"></script>

<link href="css/jquery.comiseo.daterangepicker.css" rel="stylesheet">
<script src="js/jquery.comiseo.daterangepicker.js"></script>

<script src="//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>  

<link href="css/looper.css" rel="stylesheet">
<script src="js/looper.js"></script>

<script src="js/video.js"></script>


 <script src="js/c.js"></script>

				




</head>


<body>




<?php


include ('langs/conf_db.php');

$mysqlConnection = mysql_connect($server, $username, $password);
mysql_select_db($database, $mysqlConnection);
mysql_query('SET NAMES utf8');
mysql_query("SET character_set_server='utf8'");
mysql_query("SET character_set_system='utf8'");
mysql_query("SET character_set_client='utf8'");  
 

$cl = 'cat_ru';
$fl = 'food_name_ru' ;
$sl = 'structure_ru';
 

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












foreach ($cat_ids as $cat_id){
	echo $cat_id.'->';
}
echo '<hr><hr>';











foreach ($cat_ids as $cat_id){
	$source = mysql_query("SELECT * FROM menu_cats  WHERE id='$cat_id' AND status ='on'  ");
    while($rowx = mysql_fetch_array($source)){
    $cat_name = $rowx["$cl"];
    $cid = $rowx["id"];
    echo $cid.'------>';
    echo $cat_name;
    }
    
    ///////
        
        if($cat_id=='10'){
	        foreach ($vinecat_ids as $vinecat_id){
	$source = mysql_query("SELECT * FROM vine_cats  WHERE id='$vinecat_id' AND status ='on'  ");
    while($rowx = mysql_fetch_array($source)){
    $cat_name = $rowx["vinecat_ru"];
    $cid = $rowx["id"];
    echo '<br><br>'.$cid.'------>';
    echo $cat_name;
    }
    
    
    
    $source = mysql_query("SELECT * FROM vine_items  WHERE vinecat_id='$vinecat_id'  AND status ='on' ");
    while($rowx = mysql_fetch_array($source)){
	$vine_name = $rowx["vine_name_ru"];
    echo '<br>'.$vine_name;
    }




unset($vinecat_id);
}
        }
        
        
        
        
    ///////
    else{
    $source = mysql_query("SELECT * FROM menu_items  WHERE cat_id='$cat_id'  AND status ='on' ");
    while($rowx = mysql_fetch_array($source)){
	$food_name = $rowx["$fl"];
    $food_structure = $rowx["$sl"];
    $food_id = $rowx["id"];
    echo '<br>'.$food_name;
    }
    }


echo '<hr>';
unset($cat_id);
}









?>





	



</body>
</html>