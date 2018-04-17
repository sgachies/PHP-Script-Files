<?php
$myCurl = curl_init();
curl_setopt($myCurl, CURLOPT_URL, "");
curl_setopt($myCurl, CURLOPT_FAILONERROR, 1);
curl_setopt($myCurl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($myCurl, CURLOPT_CONNECTTIMEOUT, 0);
$result = curl_exec($myCurl);
echo $result;
?>