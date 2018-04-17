<?php
if(defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) { echo "CRYPT_BLOWFISH is enabled!"; }
echo "<br>";

function cryptPass($input,$round=1000){
		$salt = "";
		$saltChars = array_merge(range('A','Z'),range('a','z'),range(0,9));
			for($i=0; $i<22; $i++){
				$salt .= $saltChars[array_rand($saltChars)];
			}
			return crypt($input,sprintf('!@#$%^&*',$round).$salt);

}

$inputPass = "steve";
$pass = "steve";
$hashedPass = cryptPass($pass);
echo $hashedPass;
if(crypt($inputPass,$hashedPass)== $hashedPass){
	echo "<br />password is a match";
}else{
	echo "<br />Password does not match";
	
}




?>