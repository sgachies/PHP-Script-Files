
<?php


$lines=file('iplog.txt');
$logname='11:28:17 pm';
$lines=preg_grep("/$logname/",$lines);

foreach($lines as $names){
echo $names."<br />";
}

?>