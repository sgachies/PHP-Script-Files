
<?php
error_reporting (E_ALL );

echo "<h2>Index page</h2>";

$origPath = "http://localhost/scripts_2/URL/directoryURL/file/coat.jpg";
$newPath =  getDirectory($origPath, 2);
echo $newPath;



?>


