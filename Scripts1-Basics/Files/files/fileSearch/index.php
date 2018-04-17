<?php
//sort alphabetically

$lines=file('names.lst');
//$lines=preg_grep("/bab/",$lines);
$lines=preg_grep("/kyalo/",$lines);

foreach($lines as $names){
echo $names."<br />";
}

?>