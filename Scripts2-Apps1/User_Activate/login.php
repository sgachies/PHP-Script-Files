<?php
error_reporting (E_ALL ^ E_NOTICE);
 ?>
<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];


if($username&&$password)
		{
		$connect=mysql_connect("localhost","root","")or die("couldn't connect!");
		mysql_select_db("test")or die("couldn't find database!");
         $query = mysql_query("SELECT * FROM useractivate WHERE username='$username'");
		 $numrows=mysql_num_rows($query);
		 
		if($numrows!=0)
		{
		 //password check
		 while($row=mysql_fetch_assoc($query))
		 {
			 $dbusername = $row['username'];
			 $dbpassword = $row['password'];
			 $activated  = $row['activated'];
			 if($activated=='0')
			 {
					die("your account is not yet activated.Please check your email!");
				
					
					exit();
			}
					
		 }
		 //check to see if they match
		 if($username==$dbusername&&md5($password)==$dbpassword)
		 {
		 echo "successful login!!Click here to enter to member page
		       <a href='member.php'>click</a>";
			   $_SESSION['username']=$username;
		 }
		 else
		 {
		 echo "incorrect password!!";
		 
		    echo "<br>";
		 	echo $dbpassword;
			echo "<br>";
			echo $dbpassword;
			echo "<br>";
		 }
		}else
		 die("user does not exist!");
	
		}else
		die("username and password are incorrect!!");
		
?>