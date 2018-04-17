<?php

include("connection.php");

$greeting = (object)$_POST;
$error = "";

/*if(!empty($greeting->first_name) and !empty($greeting->second_name) and !empty($greeting->age)){*/

	
	//echo 'Hello ' . $_POST['first_name'] . '!'; 
	
	//insert values to the database
	//$sql = "insert into guestbook (first_name,second_name,age) value('$greeting->first_name','$greeting->second_name','$greeting->age')";
	$sql = "insert into personal (first_name,second_name,age) value('$greeting->first_name','$greeting->second_name','$greeting->age')";
	
	mysql_query($sql);
	
	$select = "select * from personal";
	$result = mysql_query($select);

	
	


/*}*/

/*else if(empty($greeting->first_name)){
	$error.="First name field is empty.";
}
else if(empty($greeting->second_name)){
	$error .="Second name field is empty";
}
else if(empty($greeting->age)){
	$error .="Age field is empty.";
}

else{
	$error.="Think of something else";
}*/

include('mydetailform.php');


?>

