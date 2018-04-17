<?php

$filename='deleteFile.txt'; 

//unlink function deletes a file
if(unlink($filename)){
	echo 'File <b>' . $filename . '  </b> file has been deleted.';

}else{
	echo 'File cannot be deleted';
}



?>