<?php

// generate a 1024 bit rsa private key, returns a php resource, save to file
$privateKey = openssl_pkey_new(array(
	'private_key_bits' => 1024,
	'private_key_type' => OPENSSL_KEYTYPE_RSA,
));
openssl_pkey_export_to_file($privateKey, '/path/to/privatekey', $passphrase=1024);
 
// get the public key $keyDetails['key'] from the private key;
$keyDetails = openssl_pkey_get_details($privateKey);
file_put_contents('__FILE__', $keyDetails['key']);

?>