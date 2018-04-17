<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include('inc/connect.php');

$sql ="SELECT * FROM imagestore";
$res =mysql_query("$sql",$conn);
if($res)
{
while($row=mysql_fetch_array($res))
{
//header("content-type: text/html");
echo $row['id'];
echo "<br>";
echo $row['filename'];
echo "<br>";
echo $row['filedetails'];
echo "<br>";

//$type="content-type: ".$row['filetype'];
//header($type);
echo "<img src=image.php?id=".$row['id']." width=500 height=500/>";

}
}
else
{
echo mysql_error();
}

?>