<?
	
	$today = date('d.m.Y');
	$NY = date('d.m');
	$now = strtotime($today);
	$y = date('Y');
	
	
	

		         
	//if ($NY != '31.12'  &&  $NY != '01.01'  &&  $NY != '02.01'  &&  $NY != '03.01'  &&  $NY != '04.01'  &&  $NY != '05.01'  &&  $NY != '06.01'  &&  $NY != '07.01'  &&  $NY != '08.01'  &&  $NY != '09.01' &&  $NY != '10.01'  ){
		
		
		if ($NY != '31.12'  &&  $NY != '01.01'  &&  $NY != '02.01'  &&  $NY != '03.01'  &&  $NY != '04.01'  &&  $NY != '05.01'  &&  $NY != '06.01'  &&  $NY != '07.01'  &&  $NY != '08.01'  ){
	
	
	
	
	$source = mysql_query("SELECT * FROM seasons WHERE id = '1' ");
    while($rowx = mysql_fetch_array($source)){
    $id = $rowx['id'];
    $start = $rowx['start'];
    $end = $rowx['end'];
    $standard = $rowx['standard'];
    $family = $rowx['family'];
    ?>
       <div class="one_table_line">
	        <div class="season_t1"><?print $start;?> - <?print $end;?></div>
			<div class="season_t2"><?print $standard;?> <span><?print $lang['CUR'];?></span></div>
			<div class="season_t3"><?print $family;?> <span><?print $lang['CUR'];?></span></div>
			<div class="clear"></div>
		</div>
    
    
    <?
    }
	
	
	$source = mysql_query("SELECT * FROM seasons WHERE id != '1' ORDER BY id ");
    while($rowx = mysql_fetch_array($source)){
    $id = $rowx['id'];
    $start = $rowx['start'];
    $end = $rowx['end'];
    $standard = $rowx['standard'];
    $family = $rowx['family'];
    
    $from = $start .'.'.$y;
    $to = $end .'.'.$y;
   
   
    
    ?>
    
    
    
   
        <div class="one_table_line
	        <?if ( $now >= strtotime($from) && $now <= strtotime($to)){
			      print 'todayclass';  
		        }?>">
	        <div class="season_t1"><?print $start;?> - <?print $end;?></div>
			<div class="season_t2"><?print $standard;?> <span><?print $lang['CUR'];?></span></div>
			<div class="season_t3"><?print $family;?> <span><?print $lang['CUR'];?></span></div>
			<div class="clear"></div>
		</div>
    
    
    <?
    }

	}else{
		
		
	$source = mysql_query("SELECT * FROM seasons WHERE id = '1' ");
    while($rowx = mysql_fetch_array($source)){
    $id = $rowx['id'];
    $start = $rowx['start'];
    $end = $rowx['end'];
    $standard = $rowx['standard'];
    $family = $rowx['family'];
    ?>
       <div class="one_table_line <?print 'todayclass'; ?> ">
	        <div class="season_t1"><?print $start;?> - <?print $end;?></div>
			<div class="season_t2"><?print $standard;?> <span><?print $lang['CUR'];?></span></div>
			<div class="season_t3"><?print $family;?> <span><?print $lang['CUR'];?></span></div>
			<div class="clear"></div>
		</div>
    
    
    <?
    }
    
    
    $source = mysql_query("SELECT * FROM seasons WHERE id != '1' ");
    while($rowx = mysql_fetch_array($source)){
    $id = $rowx['id'];
    $start = $rowx['start'];
    $end = $rowx['end'];
    $standard = $rowx['standard'];
    $family = $rowx['family'];
    ?>
       <div class="one_table_line">
	        <div class="season_t1"><?print $start;?> - <?print $end;?></div>
			<div class="season_t2"><?print $standard;?> <span><?print $lang['CUR'];?></span></div>
			<div class="season_t3"><?print $family;?> <span><?print $lang['CUR'];?></span></div>
			<div class="clear"></div>
		</div>
    
    
    <?
    }
	
	
	
	
	
	
	}
	
	 
	
?>