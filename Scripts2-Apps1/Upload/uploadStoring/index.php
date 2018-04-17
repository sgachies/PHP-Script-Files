
<html>
<head>
<title>Upload an Image</title>
</head>
<body>

<form action="index.php" method="POST" enctype="multipart/form-data">
File:
<input type="file" name="image">
<input type="submit" value="upload">

</form>
<?php
error_reporting (E_ALL ^ E_NOTICE);
include('connect.php');

//file properties
$file=$_FILES['image']['tmp_name'];

if(!isset($file))
	echo "Please select an image.";
else
{
$image =addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name=addslashes($_FILES['image']['name']);
$image_size=getimagesize($_FILES['image']['tmp_name']);

if($image_size==FALSE)
echo "Thats not an <b>IMAGE</b>.";
else
{
if(!$insert=mysql_query("INSERT INTO dbimage VALUES('','$image_name','$image')"))
echo "problem uploading image";
else{
$lastid =mysql_insert_id();
echo "Image uploaded.<p/>Your Image:<p/>IMAGE:<img src=get.php?id=$lastid>";

}

}


}

?>
</body>
</html>