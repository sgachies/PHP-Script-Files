<?phpz

function ipAddress(){

	$user_ip=$_SERVER['REMOTE_ADDR'];
	$string = 'Your Ip Address is '.$user_ip;
	echo $string;
	
}

echo ipAddress();

?>