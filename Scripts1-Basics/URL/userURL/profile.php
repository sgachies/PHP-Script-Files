<?php


ob_start();// handle redirects

include 'connect.php';

if(isset($_GET['u']))
{
	$username=mysql_real_escape_string($_GET['u']);
	if(ctype_alnum($username))
		{
			$data=mysql_query("SELECT username,location,description FROM userurl WHERE username='$username'");
			if(mysql_num_rows($data)==1)
				{
					$result=mysql_fetch_assoc($data);
					$location=$result['location'];
					$description=$result['description'];
				}
				else
				{
					header("http/1.0 404 Not Found");
					exit();
				}
		}
	}

?>

<h2><?php echo $username;?>'s profile</h2>
Location : <?php echo $location; ?><br />
Description : <?php echo $description; ?><br />