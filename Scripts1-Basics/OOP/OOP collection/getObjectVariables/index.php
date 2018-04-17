<?php

include_once("class1.php");

$myObj=new class1();
$arr=get_object_vars($myObj);
foreach($arr as $name => $val){
	echo "<h3> $name | $val</h3>";
	
}


?>