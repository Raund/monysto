<?
	include('parse.php');
	$link = 'https://ru.foursquare.com/v/monysto-pizza/52c58dc4498e8f9b03e89fe3';

  $user_agent = 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)';
  $ch = curl_init($link);
  curl_setopt($ch, CURLOPT_FRESH_CONNECT,true);
  curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HEADER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100); 
  curl_setopt($ch, CURLOPT_TIMEOUT, 100);
  curl_setopt($ch, CURLOPT_VERBOSE, true);
  curl_setopt($ch, CURLOPT_AUTOREFERER, true); 
  $content = curl_exec($ch);
  $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);
  unset($ch);
  
  $html = str_get_html($content);
  $html->find('body');
  $rating = $html->find('div.leftColumn span.venueScore span',0);
  
   echo '<div class="rates_y" onclick="window.open(\''.$link.'\',\'mywindow\');"><div class="rate_data_y" >'.$rating.'</div></div>';
	//echo '<div class="rates_x rf_x"><div class="rate_data_x" >'.$rating.'</div></div>';
	
?>