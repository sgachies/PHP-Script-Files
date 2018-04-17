<?php

include_once("demo.php");

$myObj= new demo();

if(method_exists($myObj, "sayHello")){

	echo $myObj->sayHello();

}else{

	echo "sayHello method doesnot exist";
}



?>