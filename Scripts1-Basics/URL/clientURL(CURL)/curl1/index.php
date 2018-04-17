<?php
//curl calls a php file either remotley or locally location 
//name value pair $nvp
//curl prevents users from accessing entire database information and never see your file

$nvp="";
$ch=curl_init("http://localhost/scripts_2/curl/curl1/file.php");
$nvp.="&message=Hello steve!! ";
$nvp.="&n1=5";
$nvp.="&n2=10";

curl_setopt($ch,CURLOPT_POSTFIELDS,$nvp);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

echo curl_exec($ch);


?>