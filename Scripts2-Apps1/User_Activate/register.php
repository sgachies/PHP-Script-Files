<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);
 ?>

<?php
           $submit=$_POST['submit'];

            //from data
			$fullname=strtolower(strip_tags($_POST['fullname']));
			$username=strtolower(strip_tags($_POST['username']));
			$password=strtolower(strip_tags($_POST['password']));
			$repeatpassword=strtolower(strip_tags($_POST['repeatpassword']));
			$date=date("y-m-d h:i:s a");
			$email=strtolower(strip_tags($_POST['email']));

  if($submit)
  {
      //open database
	$connect=mysql_connect("localhost","root","")or die("couldn't connect!");
	mysql_select_db("test")or die("couldn't find database!");
	
	$namecheck=mysql_query("SELECT username FROM useractivate WHERE username='$username'");
	$count=mysql_num_rows($namecheck);
	
	if($count!=0)
	{
	die("Username already taken!");
	}
	//check for existence
	if($fullname&&$username&&$password&&$repeatpassword)
	{
	       if($password==$repeatpassword)
		   {
	       //check char length of username and fullname
           if(strlen($username)>15||strlen($fullname)>15)   
	       {
	      echo "Length of username or fullname is too long!";
           }	
	      else
			{
			//check password length
			if(strlen($password)<4||strlen($password)>25)
			{
			echo "Password must be between 6 and 25 characters";
			}
			else
			{
			//register the user
			//encrypt password
			$password=md5($password);
			$repeatpassword=md5($repeatpassword);
			
			}
		//generate a random number for activation
		$random =rand(123345,1000000);
		
		$queryreg=mysql_query("
		INSERT INTO useractivate VALUES ('','$fullname','$username','$email','$password','$date','$random','0')
		");
		
		//last auto increment value that you inserted
		$lastid=mysql_insert_id();
		
		//send activation email
		
		$to = $email;
		$subject ="activate your account!";
		$headers ="From: stevebarb3099@gmail.com";
		$server ="mailhost.sheffield.ac.uk";
		
		ini_set("SMTP",$server);
		
		$body ="
		Hello $fullname,\n\n
		You need to activate your account with the link below:
		http://localhost/scripts/User_Activate/activate.php?id=$lastid&code=$random \n\n
		
		Thanks for registering
		";
		
		mail($to,$subject,$body,$headers);
		
		die("You have been registered check your email to activate your account!");
			 }
		   }
		}
		else 
			echo "Your passwords do not match!";
		}
		else{
			echo "Please fill in <b>all</b> fields!";
		}
				
?>

<html>

<body>
		<h1>MEMBER REGISTRATION<h1>
		<form action='?' method='post'>
		<table>
				<tr>
					<td>
					Full name:
					</td>
					<td>
					<input type='text' name='fullname'>
					</td>
				</tr>
				<tr>
					<td>
					Username:
					</td>
					<td>
					<input type='text' name='username'>
					</td>
				</tr>
				<tr>
					<td>
					Email:
					</td>
					<td>
					<input type='text' name='email' >
					</td>
				</tr>
				<tr>
					<td>
					Choose password:
					</td>
					<td>
					<input type='password' name='password' >
					</td>
				</tr>
				<tr>
					<td>
					Repeat password:
					</td>
					<td>
					<input type='password' name='repeatpassword'>
					</td>
				</tr>
				</table>
			<p>
			<input type='submit' name='submit' value='register'/>
			</form>
				
	</body>	
		
</html>