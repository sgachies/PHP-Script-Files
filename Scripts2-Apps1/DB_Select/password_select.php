<?php

$username='bab2.0';
$connect=mysql_connect("localhost","root","")or die("couldn't connect!");
mysql_select_db("login")or die("couldn't find database!");

$queryget = mysql_query("SELECT password FROM users WHERE username='$username'")
or die("Failed to execute query");


$row=mysql_fetch_assoc($queryget);

$oldpassworddb=$row['password'];

echo $oldpassworddb;

?>