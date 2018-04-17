<?php

include('connect.php');

$sql=mysql_query("SELECT * FROM test ORDER BY  id ASC");

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

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

</head>

<body>


</body>
</html>