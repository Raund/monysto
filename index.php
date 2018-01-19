<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "ru":
        header('Location: http://monysto.com/hotel.php?lang=ru');
        break;
    case "ua":
        header('Location: http://monysto.com/hotel.php?lang=ua');
        break;
    case "en":
        header('Location: http://monysto.com/hotel.php?lang=en');
        break;        
    default:
        header('Location: http://monysto.com/hotel.php?lang=ru');
        break;
}
?>






