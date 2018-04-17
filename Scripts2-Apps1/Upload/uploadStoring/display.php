<?php
//header("Content-type: image/jpeg");
include('connect.php');

$sql = "SELECT * FROM dbimage WHERE id=";
$result=mysql_query($sql) or die("couldn't select  ".mysql_error());
$num = mysql_num_rows($result);	

while($row = mysql_fetch_assoc($result))
{

	echo $row['name'];
	echo "<br><br><br><br><br>";
	echo $row['image'];
}




?>
