<?php

$path= "C:\wamp\www\scripts2\Upload\upload\uploaded";

$dir=@opendir($path) or die("Cannot open $path");

while($file = readdir($dir))
	{
		if($file == "." || $file == ".." || $file == "files.php" || $file == "showfiles.php" || $file == "fullpath.php")
		continue;
		echo '<a href="' .$file. '">' .$file . '</a>';
	
	}
	
closedir($dir);
?>