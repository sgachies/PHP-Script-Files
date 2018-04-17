<?php
$var='123456789';

echo "<b>SUBSTRACT STRINGS</b>";

echo "<hr>";

echo "ORIGINAL STRING<br>";
echo $var;

echo "<hr>";
//SUBSTRING 1 (1st parameter idx is 0 = value 1 above and 2nd parameter is the length starting from idx 0 position from left to right positive
//SUBSTRING 2 (1st parameter idx is 0 = value 1 above and 2nd parameter is the length starting from right to left negative 
//1st parameter is positive index=0 and counting starts from  left to right
//1st parameter is negative index=1 and counting starts from  right to left
//index states the position 
echo "SUBSTRING 1<br>";
echo substr($var,0,5);

echo "<hr>";
echo "SUBSTRING 2<br>";
echo substr($var,0,-5);
echo "<hr>";






?>