<h1>Name list</h1>
<?php

//The file() filesystem function in PHP will read the contents of a file into an array. 
$lines=file('names.lst');
foreach ($lines as $name){
echo $name."<br>";
}


$myFile = "names.lst";
$fileArrayData = file($myFile);
echo $fileArrayData[0];
echo $fileArrayData[1];
echo $fileArrayData[2];
echo $fileArrayData[3];


?>