<?php
 
     //open database
	include('connect.php');
	//check name query
	if(isset($_POST['username']))
	{
		$username=mysql_real_escape_string($_POST['username']);
		
		if(!empty($username))
		{
		$query=mysql_query("SELECT * FROM users WHERE username='$username'");
		$username_result=mysql_num_rows($query);
		
		//There is no username available
		if($username_result==0)
		{
			echo "Doesnt exist";
		}
		else if($username_result==1)
		
			echo "Exists";
	
	}
}
				
?>
