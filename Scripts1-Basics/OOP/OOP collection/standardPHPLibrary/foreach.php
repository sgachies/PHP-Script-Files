<?php

$numbers= array(1,20,30,50,100);

$it=new ArrayIterator($numbers);

foreach($it as $item)
{
echo $item;
}


?>