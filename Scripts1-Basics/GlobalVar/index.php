<?php

$user_ip = $_SERVER['REMOTE_ADDR'];

function ipAddress() {
	global $user_ip;
	$string = 'Your Ip Address is: '.$user_ip;
	echo $string;
}

echo ipAddress();

?>