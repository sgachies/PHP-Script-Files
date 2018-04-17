<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include('inc/connect.php');

$id=$_GET['id'];
$sql="SELECT fileimage,filetype FROM imagestore WHERE id='$id'";
$res=mysql_query($sql);
if($res)
{
$row=mysql_fetch_array($res);
$type="content-type: ".$row['filetype'];
header($type);
echo $row['fileimage'];
}
else{
echo mysql_error();
}

?>