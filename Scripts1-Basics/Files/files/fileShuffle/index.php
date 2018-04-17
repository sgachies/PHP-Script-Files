<?php
//sort alphabetically

$lines=file('names.lst');

shuffle($lines);

foreach($lines as $names){
echo $names."<br />";
}

?>