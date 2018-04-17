<?php
//sort alphabetically

$lines=file('names.lst');

sort($lines);

foreach(glob("files/*") as $filename){
echo $filename."<br />";
}

?>