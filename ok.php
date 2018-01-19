<?
$room = htmlspecialchars($_POST['room']);
$adults = htmlspecialchars($_POST['ad']);
$kids = htmlspecialchars($_POST['kd']);
$name = htmlspecialchars($_POST['fn']);
$phone = htmlspecialchars($_POST['ph']);
$book = $_POST['e1'];


$rest = substr($book, 0, -2);
$rest2 = substr($rest, 10);
$real_out = substr($rest2, 19);
$real_in = substr($rest2, 0,-19);

$in = $real_in;
$out = $real_out;







mysql_connect("icase.mysql.ukraine.com.ua", "icase_monysto", "lmmjpz64") or die (mysql_error ());
mysql_select_db("icase_monysto") or die(mysql_error());
mysql_query('SET NAMES utf8');
mysql_query("SET character_set_server='utf8'");
mysql_query("SET character_set_system='utf8'");
mysql_query("SET character_set_client='utf8'");	

$date = date("d.m.Y");
$time = date("H:i");


$insert_sql = "INSERT INTO booking (name, adults, kids, room, in_date, out_date,  phone, time, date)" . "VALUES('$name','$adults', '$kids', '$room', '$in', '$out',   '$phone', '$time', '$date');"; 
mysql_query($insert_sql) or die (mysql_error());
mysql_close();



$m = $name.'<br>'.$phone.'<br><br> c '.$in.' до '.$out.'<br> Номер: '.$room.'<br> Взрослые: '.$adults.'<br> Дети: '.$kids;

$to='hotel@monysto.com';
//$to = 'boriskaborisenko@gmail.com';
$subject = 'Monysto Booking';
$headers = "From: " . $to . "\r\n";
$headers .= "Reply-To: ". $to . "\r\n";
//$headers .= "CC:boriskaborisenko@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = $m;	
mail($to, $subject, $message, $headers);

$sms=file_get_contents("http://sms.ru/sms/send?api_id=6532821e-9636-5f44-5dc3-f57d7c6bc7d7&to=380988888108&text=".urlencode('Monysto. Booking room!'));

?>


