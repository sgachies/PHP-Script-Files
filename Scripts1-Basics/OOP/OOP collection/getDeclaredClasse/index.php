<?php

include_once("class1.php");
include_once("class2.php");



$classArray = get_declared_classes();

foreach ($classArray as $k => $v){
	echo "<h3> $k = $v </h3>";
	
}


?>