<?php

$url = 'http://sourcesms.com/api/api-function.php';
$field_string = null;

$fields = array(
		
		'from'  	    =>'steve',
		'to'			=>'steve',
		'message'   	=>'hi there',
		'username'   	=>'stevebab',
		'pword'  		=>'stevenosis3099',
		'hash'   		=>'RjK=H4kl',
		'fromCountry'   =>'254',
		'sourceifo'     =>'0'

);

$fields_string = http_build_query($fields);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

$result = curl_exec($ch); 
curl_close($ch);



?>