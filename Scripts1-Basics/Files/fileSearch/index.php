<?php
$dir = "files/*.csv";
 // Open a known directory, and proceed to read its contents
foreach(glob($dir) as $file)
{
     echo $file."<br>";
}
?>