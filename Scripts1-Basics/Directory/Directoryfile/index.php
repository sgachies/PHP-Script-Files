<?php
//Directory Image sharing website
//User uploading files placed in a specific folder

//check if specified directory exists
//Filter out and in directory contents
//Filter out unwanted files  


$dir = 'files';
$file_display=array('jpeg','jpg','png','gif');

if(file_exists($dir)==false){
echo 'directory \'' , $dir , '\' not found!';
}else{
	$dir_contents = scandir($dir);
	
	//unset filter out specific elements of an array
	//unset($dir_contents[0]);
	//unset($dir_contents[1]);
	//print_r($dir_contents);
	
	foreach($dir_contents as $file){
	$file_type= end(explode('.' , $file));
	
	if($file !=='.' && $file !=='..' && in_array($file_type,$file_display)==true){
	
	echo '<img src="',$dir,'/', $file, '"alt="',$file, ' " height=200 width=200/>';
	}
	}
	
}




?>