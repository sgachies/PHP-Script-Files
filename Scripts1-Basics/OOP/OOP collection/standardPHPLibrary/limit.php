<?php

$numbers= array(1,20,30,50,100);
//iterator loops through object
$it=new ArrayIterator($numbers);

//limit the numbers 
$limit = new LimitIterator($it,0,1);

echo '<br>';
foreach($limit as $item)
{
echo $item;
}


?>