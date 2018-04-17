<?php
error_reporting(E_ALL);
$file2 = fopen("http://localhost/Websites/Thrifty/thrifty/login.php","rt");

while(!feof($file2))
	{
		$faqs .= fgetss($file2,1024);
		
	}	
	fclose($file2);
	
	$file3 = fopen("webcontent.txt","wt");
	fwrite($file3,$faqs);
	fclose($file3);


?>