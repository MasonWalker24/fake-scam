<?php
$code = $_GET['code'];
fopen("list.txt", "a");
$file = fopen("list.txt", "a");
fwrite($file, "[" + $code + "]");
?>
