<h1>File Download</h1>
<?php
include_once('read.php');
class FileName
{
	
	public $url="http://localhost/Projects/scripts2/Files/files/fileDownload/acfiles/";

	
	function fileDownload(){
	$dir= "acfiles/*.*";
	foreach(glob($dir) as $file)
	{
    $url="http://localhost/scripts2/Files/files/fileDownload/";
	$fileLocation=$this->url;
	$name=str_replace("acfiles/",'',$file);
	echo "<a href=".$fileLocation.$name.">".$name."</a>"."<br>";

	}
	}

}

$listnames = new FileName();
$listnames->fileDownload();



?>