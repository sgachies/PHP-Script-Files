<?php

$offset =strtotime("1 weeks 1 hours");

echo "date".date("d-m-y",$offset)."<br>";
echo "time".date("h:i:s a",$offset);

?>