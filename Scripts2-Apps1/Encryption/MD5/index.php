<?php
//one way encryption
//password is password 
//
if(isset($_POST['password'])&&!empty($_POST['password'])){
	$password=md5($_POST['password']);
	
	$filename='hash.txt';
	$handle = fopen($filename,'r');
	$file_password =fread($handle,filesize($filename));
	
			if($password==$file_password){
			echo 'password is correct';
			}else{
			echo 'password is incorrect';
			}
}else{
	echo 'please enter a pasword';
}
?>

<form action="index.php" method="POST">

	Password:<input type="text" name="password"><br><br>
	<input type="submit" value="submit">
</form>