<?php
$file="iplog.txt";
$handle=fopen($file,'a');
$data= " ip address for user " . $_SERVER['REMOTE_ADDR'] .  " date accessed: " .date('y-m-d h:i:s a')."\n";
fwrite($handle,$data);
print "Data written";
fclose($handle);




?>