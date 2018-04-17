<?php
include 'config.php';
$upload_directory="upload/";
$websiteurl="http://localhost/scripts2/Upload/Files/";
$filename=$_POST["filename"];
//$_FILE gets the encrypted file and size
	if($_FILES["file"]["size"]<2000000)
	{
	if($_FILES["file"]["error"]>0)
	{
		die("failed to upload file");
	}
	else
	{
	if(file_exists($upload_directory.$_FILES["file"]["name"]))
	{
		//generate random number
		$randomnumber=rand(1,10000);
	}
	else
	{
		//doesnt add random number
		$randomnumber=" ";
	}
	
	//upload file to config
	move_uploaded_file($_FILES["file"]["tmp_name"],$upload_directory.$randomnumber.$_FILES["file"]["name"]);
	//download location
	$downloadurl=$websiteurl.$upload_directory.$randomnumber.$_FILES["file"]["name"];
	echo "<br />your file '".$_FILES["file"]["name"]."' been uploaded <br />Link: <a href='$downloadurl'>$downloadurl</a>";
	
	$datenow=date("Y-m-d");
	mysql_query("INSERT INTO download VALUES('','$filename','$downloadurl','$datenow')");
	}
	}
	else
	{
		echo "Invalid file! It takes up much space.";
	} 
	?>
    

