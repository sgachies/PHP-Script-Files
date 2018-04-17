<?php


$fileName = $_FILES["file1"]["name"]; //File name
$fileType = $_FILES["file1"]["type"]; //  File type
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; //File in the PHP tmp folder
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"];// 0 for false and 1 for true


if(!$fileTmpLoc){
	echo "Browse for a file";
	exit();
} 
if(move_uploaded_file($fileTmpLoc, "uploads / $fileName")){
		echo "$fileName upload is complete";
}else {

	echo "move uploaded file function failed";
}



?>