<?php


		class User
	{
		
		public $str='steve';
		
		//split string to individual constituent letters
		function strname(){
		$str_length= strlen($this->str);
		for($i=0; $i<$str_length; $i++){
		echo $this->str[$i]."<br>";	
		}
		}
		
		//find a unique salt for the string 
		function salt(){
		$ascii = "!@#$%^&*()-+=_";
		$alphaLow=range('a','z');
		$alphaUpper=range('A','Z');
		
		//array lower case letters
		shuffle($alphaLow);
		foreach($alphaLow as $key=>$lower){
		echo $lower."\n";
		}
		//array ascii characters
		$ascii = explode(" ", $ascii);
		foreach($ascii as $key=>$asci){
		echo str_shuffle($asci)."\n";
		}
		
		//array lower case letters
		shuffle($alphaUpper);
		foreach($alphaUpper as $key=>$upper){
		echo $upper."\n";
		
		}		
		}
		
		// Function to encrypt a string
		function hashStr(){
	
		$string = sha1(strrev($this->strname().$this->salt()));

		return $string;
		}
		
		
}
		
		
		
	
		
		

	


	
		$str = new User();
		$str->strname();
		echo "<br>";
		$str->salt();
		echo "<br>";
		$str->hashStr();
		
		
		
		
		
		
		
		
?>

