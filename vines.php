<?//////////////////////start
	
	foreach ($vinecat_ids as $vinecat_id){
	$source = mysql_query("SELECT * FROM vine_cats  WHERE id='$vinecat_id' AND status ='on'  ");
    while($rowx = mysql_fetch_array($source)){
    $cat_name = $rowx["$cv"];
    $cid = $rowx["id"];
    }?>
    
    <div class="subcat"><?echo $cat_name;?></div>
    
    <?
    
    
    
    $source = mysql_query("SELECT * FROM vine_items  WHERE vinecat_id='$vinecat_id'  AND status ='on' ");
    while($rowx = mysql_fetch_array($source)){
	$vine_name = $rowx["$vn"];
    $vine_structure = $rowx["$sl"];
    $vine_id = $rowx["id"];
    $vine_weight = $rowx["weight"];
    $w_ci = $rowx["$wci"];
    $vine_price = $rowx["price"];
    //echo $vine_name;
    ?>
    
    <div class="one_food">
					<div class="food_main_info">
					 <div class="food_name"><?echo $vine_name;?></div>
					 <div class="food_w"><?echo $vine_weight;?> <?echo $w_ci;?></div>
					 <div class="food_price"><?echo number_format($vine_price, 2, '.', '');?> <span style="text-transform: uppercase;"><?print $lang['CUR'];?></span></div>
					 <div class="clear"></div>
					</div> 
					
					<div class="ingr"><?echo $vine_structure;?></div>
				</div>
    
    <?
    
    }




unset($vinecat_id);
}


////////////////////end ?>