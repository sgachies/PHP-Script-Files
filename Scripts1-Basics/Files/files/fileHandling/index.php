<?php

$handle=fopen('data.txt','r+');


while(!feof($handle))
{

echo fgets($handle)."</br>";

}

echo fwrite($handle,'I know something new')."<br>";
fclose($handle);
?>