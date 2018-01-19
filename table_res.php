



<?
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);








$m = $name.'<br>'.$phone.'<br><br>';



$to='pizza@monysto.com';
//$to = 'boriskaborisenko@gmail.com';
$subject = 'Pizzeria – table reservation';
$headers = "From: " . $to . "\r\n";
$headers .= "Reply-To: ". $to . "\r\n";
//$headers .= "CC:boriskaborisenko@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = $m;	
mail($to, $subject, $message, $headers);



$sms=file_get_contents("http://sms.ru/sms/send?api_id=2bbe8b17-32de-7404-8507-1474eb509373&to=380970002727&text=".urlencode('Pizzeria: '.$name.' - '.$phone));




?>