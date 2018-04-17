<?php
error_reporting (E_ALL ^ E_NOTICE);
 ?>
<?php
session_start();
$connect=mysql_connect("localhost","root","")or die("couldn't connect!");
mysql_select_db("test")or die("couldn't find database!");

$id=$_GET['id'];
$code=$_GET['code'];

if($id&&$code)
{
$check = mysql_query("SELECT * FROM useractivate WHERE id='$id' AND random='$code'");
$checknum=mysql_num_rows($check);

if($checknum==1)
{
//run query to activate account
$active =mysql_query("UPDATE useractivate SET activate='1' WHERE id='$id' ");
die ("Your account is activated");
}else{
		die("Invalid ID or Activation code.You may now log in");
}
}
?>

