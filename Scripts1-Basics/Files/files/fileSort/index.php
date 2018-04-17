<?php
//sort alphabetically

$lines=file('names.lst');

rsort($lines);

foreach($lines as $names){
echo $names."<br />";
}

?>