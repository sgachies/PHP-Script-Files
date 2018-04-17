<?php
$offset=strtotime("0 week 0 hour ");

$current=date("d-m-y h:i:s a",$offset);
$trigger="12-07-13 09:47:00 am";

echo "Current time is".$current."<br>";

echo "Trigger time is " . $trigger."<p>";
//refresh page every 60 second 
echo "<meta http-equiv='refresh' content='2'>";

if($current>=$trigger){
echo "Execute!!";
}
else{
echo "Wait!!";
}


?>