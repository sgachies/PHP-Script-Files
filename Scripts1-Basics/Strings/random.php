<?php

$random =rand(123345,1000000);
echo "Random number generator";
echo "</br>";
echo $random;
echo "<hr>";

echo "message digest encryption 5 (MD5)";
echo "</br>";
$word1='admin';
$word2='bab123';

$encrypt1=md5($word1);
$encrypt2=md5($word2);

echo $encrypt1;
echo "</br>";
echo $encrypt2;

$date=date("Y-m-d" );
$time=time("h-i-s a'");

echo "<hr>";
echo "</br>";
echo $date;
echo "</br>";
echo $time;
echo "</br>";


echo(date("d/m/y h:i:s a") . "<br />");


?>
