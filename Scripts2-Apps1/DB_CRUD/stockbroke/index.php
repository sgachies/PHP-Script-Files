<?php
error_reporting (E_ALL ^ E_NOTICE);
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Users</title>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/gen_validatorv4.js" ></script> 
<script src="js/jquery-1.4.1.min.js"></script>

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
<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 	
					$username= $_POST['username'] ;					
					$email=$_POST['email'] ;
					$password=$_POST['password'] ;
					$random=$_POST['random'] ;
					$activated=$_POST['activated'] ;
												
		 mysql_query("INSERT INTO `users`(username,email,password,random,activated) 
		 VALUES ('$username','$email','$password','$random','$activated')"); 
				
				
	        }
?>
</form>
<table class="table span6 table-condensed table-bordered table-striped well" >
	<thead>  
          <tr class="info">
      
            <th>place</th>  
            <th>hotel</th>  
            <th>capacity</th>  

			
          </tr>  
      </thead>
			<?php
			include("connect.php");
			
				
			$result=mysql_query("SELECT * FROM available");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['place']."</font></td>";
				echo"<td><font color='black'>". $test['hotel']. "</font></td>";
				echo"<td><font color='black'>". $test['capacity']. "</font></td>";
				echo"<td> <a href ='view.php?id=$id'>Edit</a>";
				echo"<td> <a href ='del.php?id=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table>

</body>
</html>


