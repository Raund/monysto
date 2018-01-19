<?//////////////////////start
	
	foreach ($alccat_ids as $alccat_id){
	$source = mysql_query("SELECT * FROM alc_cats  WHERE id='$alccat_id' AND status ='on'  ");
    while($rowx = mysql_fetch_array($source)){
    $cat_name = $rowx["$ca"];
    $cid = $rowx["id"];
    }?>
    
    <div class="subcat"><?echo $cat_name;?></div>
    
    <?
    
    
    
    $source = mysql_query("SELECT * FROM alc_items  WHERE alccat_id='$alccat_id'  AND status ='on' ");
    while($rowx = mysql_fetch_array($source)){
	$alc_name = $rowx["$an"];
    $alc_structure = $rowx["$sl"];
    $alc_id = $rowx["id"];
    $alc_weight = $rowx["weight"];
    $w_ci = $rowx["$wci"];
    $alc_price = $rowx["price"];
    //echo $vine_name;
    ?>
    
    <div class="one_food">
					<div class="food_main_info">
					 <div class="food_name"><?echo $alc_name;?></div>
					 <div class="food_w"><?echo $alc_weight;?> <?echo $w_ci;?></div>
					 <div class="food_price"><?echo number_format($alc_price, 2, '.', '');?> <span style="text-transform: uppercase;"><?print $lang['CUR'];?></span></div>
					 <div class="clear"></div>
					</div> 
					
					<div class="ingr"><?echo $alc_structure;?></div>
				</div>
    
    <?
    
    }




unset($vinecat_id);
}


////////////////////end ?>