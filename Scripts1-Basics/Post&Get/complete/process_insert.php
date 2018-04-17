<?php

//include the connection.php file content for connecting to the database 
include("connection.php");

//create an object casting it to global variable $_POST
$greeting = (object)$_POST;
$error = "";
	
	//sql statement to insert user input into the database
	$sql = "insert into personal (first_name,second_name,age) value('$greeting->first_name','$greeting->second_name','$greeting->age')";
	
	//execute the $sql statement to insert records to the database
	mysql_query($sql);
	
	//sql statement to retrieve records from the database
	$select = "select * from personal";
	
	//execute the sql statement to reterieve records from the database 
	$result = mysql_query($select);



include('mydetailform.php');


?>

