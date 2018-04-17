<?php

$names= array('mary','millicent','sheila',);
$names=new ArrayObject($names);


echo $names->count();
echo '<br>';
$names->append('bab');
echo $names->count();




echo '<pre>';
print_r($names);


?>