<?php
//Return a single character from an open file 
$file = fopen("file.txt", "r");
$character = fgetc($file);
fclose($file);
echo $character;




?>