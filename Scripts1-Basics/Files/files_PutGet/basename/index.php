
<?php
//basename()          -return a filename
//file_get_content()  -read the content of a file into a string
//file_put_content()  -write a string to a file

$url = 'num.txt';
$file=file_get_contents($url);
$name = basename($url);

$en=sha1(md5($file));
$fi=strrev($en);


//parameter 1 file name 
//parameter 2 data of the file

file_put_contents('data.txt',$fi);

echo $file.'<br>';
echo $en.'<br>';
echo $fi.'<br>';
?>