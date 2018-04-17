<?php


include('inc/connect.php');

$testpic = 'uploads/0723401197.jpg';
$qrtext=$testpic;


$handle = fopen($testpic, "rb");
$img = fread($handle, filesize($testpic));
fclose($handle);

$qrimage = base64_encode($img);

$sql = "insert into qrdata values('','$qrtext','$qrimage');";


mysql_query($sql) or die('Bad Query at 12'.mysql_error());

echo "Success! You have inserted your picture!";
?>


<a href="display.php">Display qr image</a>
