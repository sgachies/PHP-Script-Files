<?php

class Log
{
/*
* @description write to a file
* @parameter str $strFilename-name of the file
* @parameter strData-Data to be appended to the file
*/
		public function Write($strFileName, $strData)
		{
				if(!is_writable($strFileName))
				die('Change your CHMOD permission to '. $strFileName);
				
				$handle=fopen($strFileName, 'a+');
				
				fwrite($handle, "\r".$strData);
				fclose($handle);
					
		}
/*
* @description read to a file
* @parameter str $strFilename name of the file
* @return str  returns the text files
*/
		public function Read($strFileName)
		{
					$handle=fopen($strFileName, 'r');
					
					return file_get_contents($strFileName);
		}
		

}


?>