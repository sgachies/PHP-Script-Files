<?php
$str = file_get_contents('image.png');
file_put_contents('image23.png',$str);

echo $str;
?>