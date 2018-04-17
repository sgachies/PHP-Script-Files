<?php

$fileName=$_FILES["upload_file"]["name"];//file name
$fileTmpLoc=$_FILES["upload_file"]["tmp_name"];//file in tmp folder
$fileType=$_FILES["upload_file"]["type"];//file type 
$fileSize=$_FILES["upload_file"]["size"];//file size in bytes
$fileErrorMsg=$_FILES["upload_file"]["error"];//0 for false 1 for true

//Image Upload Error handling
if(!$fileTmpLoc){
	echo "ERROR:Please browse for file before clicking the upload button";
	exit();
}else if($fileSize > 5242880){
	echo "ERROR:Your file was larger than 5 megabytes in size";
	unlink($fileTmpLoc);//remove the uploaded file from the php tamp folder
	exit();
}else if(!preg_match("/\.(gif|jpg|png)$/i",$fileName)){
	//This condition is only if you wishto allow uploading of specific file types
	echo "ERROR:Your image was not. gif .jpg . or png";
	unlink($fileTmpLoc);//remove the uploaded file from the php tamp folder
	exit();
}else if($fileErrorMsg == 1){ //if file upload error key is equal to 1
	echo "ERROR:An error occurred while processing the file.Try again.";
	exit();
}

$moveResult = move_uploaded_file($fileTmpLoc,"uploads/$fileName");
//check to make sure the move result is  true before continuing 

if($moveResult!=true){
  echo "ERROR:file not uploaded again";
  unlink($fileTmpLoc);
  exit();
  
}

echo "File Name: <b>$fileName: uploaded successufully</b><br>";
echo "File Size: <b>$fileSize: bytes</b><br>";
echo "File Type: <b>$fileType:</b><br>";
echo "File Error: <b>$fileErrorMsg:</b><br>";



?>