<?
	include('parse.php');

$link = 'http://www.booking.com/hotel/ua/pizzeria-monysto-bukovel1.html';

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
  $rating = $html->find('div[id=review_list_main_score]',0)->plaintext;
  $rr = str_replace(",",".",$rating);
  //$rating = $html->find('div[id=review_list_main_score]',0);
  //$rr = str_replace(",",".",$rating);
  
  //echo '<div class="rates rb" onclick="window.open(\''.$link.'\',\'mywindow\');"><div class="rate_data" >'.$rr.'</div></div>';
  echo '<div class="rates rb"><div class="rate_data" >'.$rr.'</div></div>';
  
  ?>