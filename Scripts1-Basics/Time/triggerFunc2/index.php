<?php
error_reporting (E_ALL ^ E_NOTICE);
 include("connect.php");
 include("timer.php");
 
$current='0000-00-00 00:00:00';
$future='0000-00-00 00:00:00';


 echo "<pre>";
//$current= date("d-m-y h:i:s a");
//echo "CURRENTTIME="  .$current."<br>";
//echo "FUTURETIME ="  .trigger()."<br>";
 //$future=trigger();
 //if($current>$future)
 //{
 //echo "Execute!!<br>";
 //}
 // else
 //{
 //echo "wait!!<br>";
 //}
 
mysql_query("INSERT INTO download VALUES('','$current','$future')");
mysql_query("UPDATE trigger SET current ='$current' future ='$future' WHERE id = 1");
	
$result=mysql_query("SELECT * FROM trigger WHERE id='$id'");
while($row = mysql_fetch_array($result))
  		{
  			echo $row['current'];
			echo $row['future'];
 		}



?>