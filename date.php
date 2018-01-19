<?
$date1 = '26-04-2015'; 
$date2 = '06-04-2015'; 
function unix_time_convert ($timestamp) 
{ 
$date = date ("d.m.Y" , $timestamp); 
return $date; 
} 
function time_convert ($timing) 
{ 
$date_time = explode("-",$timing); 
$data_unix = mktime(0,0,0,$date_time[1],$date_time[0],$date_time[2]); 
return $data_unix; 
} 
$data1_unix = time_convert ($date1); 
$data2_unix = time_convert ($date2); 
$date3_unix = $data1_unix - $data2_unix; 
$date3 = unix_time_convert($date3_unix); 
if (ereg ("([0-9]{1,2}).([0-9]{1})([0-9]{1}).([0-9]{4})", $date3, $time)) 
$times1 = $time[4] - 1970; 
$times2 = $time[3] - 01; 
$times3 = $time[1] - 01; 
echo ''.$times3.' дня '.$times2.' месяцев '.$times1.' года'; 

?>