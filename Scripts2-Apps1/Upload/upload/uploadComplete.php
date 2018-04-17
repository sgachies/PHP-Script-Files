 <?php

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$temp=$_FILES["myfile"]["tmp_name"];
$error=$_FILES["myfile"]["error"];


if($size > 1000000)
	{
		die("the file is too big");
	}
else
move_uploaded_file($temp,"uploaded/".$name);
//header is a redirect	
header("Location:upload.php");

?>