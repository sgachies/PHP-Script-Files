<?php

$names= array('mary','millicent','sheila',);
$names=new ArrayIterator($names);
$ci=new CachingIterator($names);


foreach($ci  as $item)

{
	echo $item;
	if($ci->hasNext())
	echo',';
}




?>