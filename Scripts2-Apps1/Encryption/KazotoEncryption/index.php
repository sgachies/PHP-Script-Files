<?php

// Function to encrypt a string
function kazoto_encrypt($string = '', $salt = null){

 	// Check if string is empty.
	if(empty($string))
		return false; 

	for($i = 0; $i < 5; $i++){
		$string = strrev(sha1(md5($string . $salt)));
	}

	return $string;
}

// Function to generate a salt.
// @param length numeric 1 - 60(max)
function _generate_salt($length = 8){

	// Set salt to null for no missing variable errors.
	$salt = '';

	// Define our possible characters
	// We leave out vowels to avoid generating bad words.
	// We leave out characters that look the same, 1 and lowercase l, 5 and S, etc.
	$possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ!@#$%^&*()-+=_";

	// Grab number of possible characters.
	$maxlength = strlen($possible);

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

echo kazoto_encrypt('this_is_my_cool_string', _generate_salt());
// be47d58dfe9a69c16a2e5f30df7f4ce5f27d75aa