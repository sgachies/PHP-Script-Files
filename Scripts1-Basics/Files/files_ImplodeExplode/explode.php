<?php
$likes = 'eating,playing,sleeping,dancing,talking';

$likes=explode(',',$likes);

//print_r($likes);

foreach($likes as $key =>$like){

//echo $like, ' at position ', $key, '<br >';

echo '<a href="#">', $like ,'</a><br>';
}


?>