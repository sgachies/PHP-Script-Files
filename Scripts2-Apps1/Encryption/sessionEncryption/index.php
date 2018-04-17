<?php
session_start();
class sessionEncryption
	{
	
public $username_session='123';
		
function generate_salt($length = 10){

	$salt = '';
	//range of strings
	 $alphaLow=range('a','z');
	 
	//array lower case letters
	foreach($alphaLow as $key=>$lower){
	$lower."\n";
	echo $maxlength = strlen($lower);
	}
		
		
	// Grab number of possible characters.
	

	// Make sure length is not longer than max possible characters.
	if($length > $maxlength)
		$length = $maxlength;

	// Set up count to stop loop at desired length..
	$i = 0;

	while($i < $length){

		// Pick a random character.
		$char = substr($possible, mt_rand(0, $maxlength-1), 1);

		// Have we already used this character before?
		if(!strstr($salt, $char)){

			// If not, add to the end of salt and increase count.
			$salt .= $char;
			$i++;

		}

	}

	// Finally return salt!
	return $salt;

}
		
	
		
		
		function hashStr($username_session = '', $salt = null){
		// Check if string is empty.
		if(empty($username_session))
		return false; 
		for($i = 0; $i < 5; $i++){
		$username_session = strrev(sha1(md5($string . $salt)));
		}
		return $username_session;
		}
		
		
		
		
}



?>