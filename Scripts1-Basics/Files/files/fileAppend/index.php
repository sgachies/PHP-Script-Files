<?php

$file="myText.txt";
$string="jkuat \n";

//file append
$fp = fopen($file,"a");

fwrite($fp , $string);

fclose($fp);

//file reading
$read=fopen($file,"r");
$data=fread($read,filesize($file));
fclose($read);
echo $data;
?>