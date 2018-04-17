<?php
//Cookies are used to store information of user 
//Session for users are destroyed immediatley after login out

$exp = time() + 86400;

setcookie("name","Alex",$exp);
setcookie("age",19,$exp);


//isset function returns true or false value  soemthing is set or not
if(isset($_COOKIE['name'])){
	echo "cookie is set";
}else{
	echo "cookie is not yet set";
}



?>