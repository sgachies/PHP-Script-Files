<?php

$filename='RenameFile.txt'; 
$rand= rand(100,10000);

if(rename($filename,$rand.'.txt')){
	echo 'File <b>' . $filename . '  </b> file has been Renamed.';

}else{
	echo 'File cannot be renamed';
}



?>