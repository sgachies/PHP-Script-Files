<?php

  $message = $_POST['message']; 
  $first_name = $_POST['first_name']; 
  $last_name = $_POST['last_name']; 
  $email = $_POST['email']; 
  $telephone = $_POST['telephone']; 
 
 $message = "$first_name $last_name $email $message";
  
// Data for text message. This is the text message data.
$from = "FROM"; // This is who the message appears to be from.
$to = "7545000000"; //A single number or a comma-seperated list of numbers
$username = "Username"; // insert your username
$pword = "Pass"; //Your developer API password
$hash = "RjK=H4kL"; //Do not change
$formCountry = "44"; //Change this to the appropiate country code (default UK)
$sourceinfo = "1"; //Display POST info

//extract data from the post
//extract($_POST);

//set POST variables
$url = 'http://sourcesms.com/api/api-function.php';
$fields = array(
            'from'=>urlencode($from),
            'to'=>urlencode($to),
            'message'=>urlencode($message),
			'username'=>urlencode($username),
			'pword'=>urlencode($pword),
			'hash'=>urlencode($hash),
			'formCountry'=>urlencode($formCountry),
			'sourceinfo'=>urlencode($sourceinfo)
        );

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string,'&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

?>
   