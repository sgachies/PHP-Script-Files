

<?php
include('connect.php');

$checkname='mary munyiva';

$name=$checkname;
$sql = mysql_query("SELECT * FROM test WHERE name='$name' ");

if($name=true){

$id='id';
$name='name';
$phone='phone';
$email='email';

while($row=mysql_fetch_assoc($sql)){

  echo   'id:'    . $row[$id]    .'<br />' .
         'Name:'  . $row[$name]  .'<br />' .
         'Phone:' . $row[$phone] .'<br />' .
	     'Email:' . $row[$email] .'<br /> <hr>' ;
		 

}

}










?>