<?php
error_reporting (E_ALL ^ E_NOTICE);
 ?>
 
<?php
include("db.php");
$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM users WHERE id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				
					$username= $_POST['username'] ;					
					$email=$_POST['email'] ;
					$password=$_POST['password'] ;
					$random=$_POST['random'] ;
					$activated=$_POST['activated'] ;

if(isset($_POST['save']))
{	
	$username_save = $_POST['username'];
	$email_save = $_POST['email'];
	$password_save = $_POST['password'];
	$random_save = $_POST['random'];
	$activated_save = $_POST['activated'];
	mysql_query("UPDATE users SET username ='$username_save', email ='$email_save',
		 password ='$password_save',random ='$random_save',activated ='$activated_save'  WHERE id = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: index.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<table>

	<tr>
		<td>Username</td>
		<td><input type="text" name="author" /></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="name" /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="password" /></td>
	</tr>
	<tr>
		<td>random</td>
		<td><input type="text" name="random" /></td>
	</tr>
	<tr>
		<td>Activated</td>
		<td><input type="text" name="activated" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="add" /></td>
	</tr>
</table>

</body>
</html>
