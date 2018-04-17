<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include('inc/connect.php');

$filename=$_POST['filename'];
$filedetails=$_POST['filedetails'];
$fileimage=addslashes(file_get_contents($_FILES['fileimage']['tmp_name']));
//get image size and to know type etc
$image=getimagesize($_FILES['fileimage']['tmp_name']);
$filetype=$image['mime'];

$sql = "INSERT INTO imagestore VALUES('','$filename','$filedetails','$fileimage','$filetype')";
$res=mysql_query($sql);

if($res){
echo "information store successful";
}
else{
echo mysql_error();
}





?>
<hr><br>
<a href="index.php">< back</a>
<hr><br>
<a href="show.php">display images form database</a>
