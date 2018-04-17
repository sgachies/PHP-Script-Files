<?php
error_reporting (E_ALL ^ E_NOTICE);
 ?>
<?php
session_start();
if($_SESSION['username'])
	{
	echo "welcome,".$_SESSION['username']."!</br>";
	echo "<a href='logout.php'>logout</a></br>";
	echo "<a href='changepassword.php'>change password</a></br>";
	}
else
	{
	die("You must be logged in!!");
	}
?>