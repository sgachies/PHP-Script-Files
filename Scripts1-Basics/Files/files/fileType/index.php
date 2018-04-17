<?php
$target = "./";
$fileType = filetype($target);
echo "Target is a <strong>$fileType</strong>";

echo "<hr />";

$target = "file.txt";
$fileType = filetype($target);
echo "Target is a <strong>$fileType</strong>";
?>