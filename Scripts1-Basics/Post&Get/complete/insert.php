<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My details</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="process_insert.php" method="post"> 


<table align="center">
<tr><td><?php 
	echo $error;
	echo "Hello ".$greeting->first_name."&nbsp;&nbsp;".$greeting->second_name."<br><br>";
	echo "Your are ".$greeting->age."years";
	
	
?></td></tr></table>

<hr />
<table align="center">
<tr>
<td>First name:</td> 
<td><input type="text" name="first_name"  /></td>

<tr><td>Second name:</td> 
<td><input type="text" name="second_name" /></td>
<tr><td>Age: </td>
<td><input type="text" name="age"  /></td>

<tr><td colspan="2"><div align="center">
  <input type="submit" value="Submit"></div> 
</td></tr>
</table>

<table>
<tr><td><a href="index.php">Back to main page</a></td></tr>
</table>
</form>


</body>
</html>
