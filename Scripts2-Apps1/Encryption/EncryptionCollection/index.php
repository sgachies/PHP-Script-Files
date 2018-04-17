<?php

function basicHash($password){
	return md5($password);
}

function saltedHash($password,$salt){
	return hash('sha256',$salt . $password);
}

function bCrypt($password,$salt){
	if(DEFINED('CRYPT_BLOWFISH') && CRYPT_BLOWFISH){
	$salt = 'a1bc2defgh' . $salt;
	return crypt($password, $salt);	
	
	}
}

$password = 'password';
$salt =substr(md5(uniqid(rand(),0)),0,22);

$basicHash     = basicHash($password);
$saltedHash    = saltedHash($password, $salt);
$bcrypt        = bCrypt($password, $salt);
$checkpassword = crypt($password, $bcrypt);

echo "<b>Password:     </b>". $password."<br />";
echo "<b>Basic Hash:   </b>". $basicHash."<br />";
echo "<b>Salted Hash:  </b>". $saltedHash."<br />";
echo "<b>Bcrypt:       </b>". $bcrypt."<br />";
echo "<b>Check:        </b>". $checkpassword."<br />";

?>