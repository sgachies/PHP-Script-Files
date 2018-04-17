<?php

include_once("class1.php");

$properties = get_class_vars("class1");

foreach ($properties as $k => $v){
	echo "<h3> $k = $v </h3>";
	
}


?>