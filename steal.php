<?php
$code = $_GET['code'];
fopen("list.txt", "a");
fwrite("list.txt", "[" + $code + "]");
?>
