<?php
include_once('user.php');

if(isset($_POST['submit'])){
$name=$_POST['user'];
$pass=$_POST['pass'];

$object=new user();
$object->Login($name,$pass);

}

?>
<html>
<head></head>

<body>
<form method="post" action="index.php">
Username:<input type="text" name="user"/></br>
Password:<input type="password" name="pass"/></br>
<hr>
<input type="submit" name="submit" value="Login"/>

</form>
</body>
</html>
