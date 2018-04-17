<?php
require("iha.php");

$iha = new iha();

$pw = "secret password";

//Generates the hash-value of our password
$hash = $iha->hash($pw);

echo "Password: ".$pw." <br>Hash-Value: ".$hash."<br><br>";



if($iha->compare($pw, $hash)) //or: $iha->compare($pw,"AAAJxA;2Rd/Ts;3qwiKTWppNtb2M4nhDrmyA==")
	echo "Password ok";
else
	echo "Wrong password";



//Class-Informations
echo "<hr>";
$iha->info();


?>