<?php
error_reporting (E_ALL ^ E_NOTICE);
 ?>
<?php

session_start();

$user=$_SESSION['username'];

if($user)
{
//user is logged in

if($_POST['submit'])
{
//check fields
$oldpassword=md5($_POST['oldpassword']);
$newpassword=md5($_POST['newpassword']);
$repeatpassword=md5($_POST['repeatpassword']);

//check password againist db


//connect db
$connect=mysql_connect("localhost","root","")or die("couldn't connect!");
mysql_select_db("test")or die("couldn't find database!");

$queryget = mysql_query("SELECT password FROM useractivate WHERE username='$user'")
or die("Failed to execute query");
$row=mysql_fetch_assoc($queryget);
$oldpassworddb=$row['password'];


//check passwords
//oldpassword converted to md5 encryption
if($oldpassword==$oldpassworddb)
{
		//check two new passwords
		if($newpassword==$repeatpassword)
		{
		//success
		//change password in db
			echo "success";
		$querychange=mysql_query("
		UPDATE useractivate SET password='$newpassword' WHERE username='$user'
		");
		session_destroy();
		die("Your password has been changed.<a href='index.php'>login</a>");
		
		}
		else
			die("New Passwords dont match");


}
else
   die("Old password doesnt match!");

}
else
{

echo"
		<form action='changepassword.php' method='post'>
			Old passsword:<input type='text' name='oldpassword'><p>
			New passsword:<input type='password' name='newpassword'><br>
			Repeat new passsword:<input type='password' name='repeatpassword'><p>
		<input type='submit' name='submit' value='change password'>
		</form>
	";
}

}
	else
	   die("You must be logged in to change password!");



?>