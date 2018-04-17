<?php

$file = fopen("file.txt", "r");
$line = fgets($file, 100);
fclose($file);
echo $line;




?>