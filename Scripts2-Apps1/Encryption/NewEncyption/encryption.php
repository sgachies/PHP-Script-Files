<?php
Class Encryption{
	
	
	function setEncry($str){
	//shifts every alpha numeric character 13 further along
	$str = str_rot13($str);
	$str = strtolower($str);
	$str = str_replace('a','1',$str);
	$str = str_replace('b','2',$str);
	$str = str_replace('c','3',$str);
	$str = str_replace('d','4',$str);
	$str = str_replace('e','5',$str);
	$str = str_replace('f','6',$str);
	$str = str_replace('g','7',$str);
	$str = str_replace('h','8',$str);
	$str = str_replace('i','9',$str);
	$str = str_replace('j','0',$str);
	$str = str_replace('k','1',$str);
	$str = str_replace('l','2',$str);
	$str = str_replace('m','3',$str);
	$str = str_replace('n','4',$str);
	$str = str_replace('o','5',$str);
	$str = str_replace('p','6',$str);
	$str = str_replace('q','7',$str);
	$str = str_replace('r','8',$str);
	$str = str_replace('s','9',$str);
	$str = str_replace('t','0',$str);
    $str = str_replace('u','1',$str);
	$str = str_replace('v','2',$str);
	$str = str_replace('w','3',$str);
	$str = str_replace('x','4',$str);
	$str = str_replace('y','5',$str);
	$str = str_replace('z','6',$str);
	$str = str_replace(' ','0',$str);
	$salt = "";
	$saltChars = 'abcdef';
	for($i = 0; $i < 22; $i++){
		$salt .=$saltChars[array_rand($saltChars)];
	}
	return $str.$salt;
	}
}
?>