<?php

include('inc/connect.php');

$result=mysql_query("SELECT * FROM qrdata ");
while($row = mysql_fetch_array($result))
{

$row['qrtext'];
$images=$row['qrimage'];
echo '<img src="data:image/jpeg;base64,' . base64_encode( $images ) . '" width="100" height="100" /><br/>';

$db_img = base64_decode($images);
}


?>
