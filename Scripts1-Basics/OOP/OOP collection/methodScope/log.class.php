<?php




class Log
{
//method scope
private $_FileName;
private $_Data;

/*
* @description write to a file
* @parameter str $strFilename-name of the file
* @parameter strData-Data to be appended to the file
*/
		public function Write($strFileName, $strData)
		{
		
		/*_FileName and _Data can be grabbed outside of the object
		  and set in the right function */
		  
		//set Class  vars
				$this->_FileName = $strFileName;
				$this-> _Data=$strData;
		//Check Data
				$this->_CheckPermission();
				$this->_CheckData();
		//Write the File
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
					$this->_FileName = $strFileName;
					$this->_CheckExists();
					
					$handle=fopen($strFileName, 'r');
					return file_get_contents($strFileName);
		}
		
/*
* @description check if the file being called exists

*/
		public function _CheckExists()
		{
					if(!file_exists($this->_FileName))
					die('The file does not exists');
					
		}
		

		private function _CheckPermission()
		{
				 
				if(!is_writable($this->_FileName))
				die('Change your CHMOD permission to '. $this->_FileName);
				
		}
		
		private function _CheckData()
		{
				 
				if(strlen($this->_Data) > 156)
				die('You must have more than one character for data ');
				
		}
		
}


?>