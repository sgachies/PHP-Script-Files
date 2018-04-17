<?php

require_once('log.class.php');

$Log = new log();
//$Log ->Write('text.txt','my name is steve');
echo "<pre>";
echo $Log ->Read('text.txt');


?>