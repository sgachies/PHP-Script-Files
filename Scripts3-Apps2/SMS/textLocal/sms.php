<?php
error_reporting (E_ALL ^ E_NOTICE);
 ?>
<?php
$username="cra.youth@gmail.com";
$password="magnificent";

//get form data

echo "<b>Number:</b>  ".$number  = $_POST['numbertext'].$_POST['number']."<br>";
echo "<b>Sender:</b>  ".$from    = $_POST['from']."<br>";
echo "<b>Message:</b> ".$message = $_POST['message'];

// Configuration variables
$info = "1";
$test = "0";
 
$url = "uname=".$uname."&pword=".$pword."&message=".$message
."&from=". $from."&selectednums=".$selectednums."&info=".$info."&test=".$test;
 
// Send the POST request with cURL
if($_POST['submitted']=="true")
{
	$curl = curl_init('https://www.txtlocal.com/sendsmspost.php');
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	 //This is the result from Textlocal
	echo $result = curl_exec($curl);
	curl_close($curl);
}
?>
