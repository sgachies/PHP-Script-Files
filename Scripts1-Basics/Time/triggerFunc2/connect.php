<?php

//define the host of the mysql database
$dbhost = "localhost";

//define the mysql database user
$dbuser = "root";

//define the mysql database password
$dbpass = "";

//define the database to be use
$dbselect = "test";


//establish a connection to the database
$conn = mysql_connect($dbhost, $dbuser, $dbpass)or die("Could not connect to the database.");

//select the database to be used
mysql_select_db($dbselect) or die("Could not select database");

?>
