<?php
   include('connect.php');
  

	 //from data
	
	$datec=date("y-m-d h:i:s a");
	$datef=date("y-m-d h:i:s a");
	
 
  
	  //sql statement to add record to database
		$insert = "INSERT INTO alarm VALUES('','$datec','$datef')";
		mysql_query($insert);
				
	 echo $datef;


?>


 
