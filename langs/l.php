<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

// register the session and set the cookie
$_SESSION['lang'] = $lang;

setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
elseif(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
elseif(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'ua';
}

switch ($lang) {
 
  case 'ua':
  $lang_file = 'ua.php';
  break;
  
  case 'en':
  $lang_file = 'en.php';
  break;

  case 'ru':
  $lang_file = 'ru.php';
  break;

  default:
  $lang_file = 'ua.php';

}

include_once 'langs/'.$lang_file;
?>