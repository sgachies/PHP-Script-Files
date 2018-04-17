<?php
	
	
if(isset($_POST['email']))
{
	//include database connection file
	include "dbconn.php";
	
	//define sql statement to select from database
	$sql = "INSERT INTO contacts (id, name, email, feedback) VALUES (NULL, '".addslashes($_POST['name'])."','".addslashes($_POST['email'])."','".addslashes($_POST['feedback'])."');";
	
	//execute the query and store the record set in the variable $result
	$result=mysql_query($sql) or die("couldn't select  ".mysql_error());
	
	//email address to send the infomartion to
	$to = 'name@your-email-provider.com';
	
	//email address of the person who submitted the feedback form
	$from = "From: ".$_POST['email'];
	
	//compose the subject of the email
	$subject =  'Feedback from: '.$_POST['email'];
	
	//compose the message to be sent to the email address
	$msg = "Feedback by ".$_POST['feedback']."\n";
	
	//send the email
	$emailsent = mail($to,$subject, $msg, $from);
	
	if ($result){
		echo 'Thank you! Your feedback has been recieved.';
	}else{
		echo 'There was a problem sending your request. Please try again!';
	}
	}	
?>