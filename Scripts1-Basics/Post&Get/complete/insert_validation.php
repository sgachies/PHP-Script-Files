<?php

//include the connection.php file content for connecting to the database
include("connection.php");


//create an object casting it to global variable $_POST
$greeting = (object)$_POST;
$error = "";

//validate to ensure that the input fields are empty
if(!empty($greeting->first_name) and !empty($greeting->second_name) and !empty($greeting->age)){
	
	//insert values to the database
	$sql = "insert into personal (first_name,second_name,age) value('$greeting->first_name','$greeting->second_name','$greeting->age')";
	
	//execute the the sql statement
	mysql_query($sql);

}

//print an error message if first name field is empty
else if(empty($greeting->first_name)){
	$error.="First name field is empty.";
}

//print an error message if the second name field is empty
else if(empty($greeting->second_name)){
	$error .="Second name field is empty";
}

//print an error message if the age field is empty
else if(empty($greeting->age)){
	$error .="Age field is empty.";
}

else{
	$error.="Thank you.";
}

//include mydetailform_validation.php file content
include('mydetailform_validation.php');


?>

