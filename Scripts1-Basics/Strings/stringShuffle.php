<?php
$str='abcdefghijklmnopqrstuvwxyz';


//substr($str,0,5);
//start index 0 and 5 is the length

echo substr($str,0,3)."<br>";

$string1=substr($str,0,3);

echo str_shuffle($string1)."<br>";

$dict=str_shuffle($string1);

if($dict==$string1){
echo 'abc has been found'."<br>";
}
else{
echo 'continue'."<br>";
}




?>