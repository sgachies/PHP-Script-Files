<?php

$numbers= array(1,20,30,50,100);
//iterator loops through object
$it=new ArrayIterator($numbers);

echo $it->current();
$it->next();
echo $it->current();


?>