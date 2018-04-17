<?php
error_reporting (E_ALL ^ E_NOTICE);
 ?>
<?php
include("connection.php");
$comment=$_POST['comment'];

$insert="INSERT INTO posts(id,comment) values ('','$comment')";
mysql_query($insert) or die("Could not insert into ". mysql_error());

echo $comment;


?>