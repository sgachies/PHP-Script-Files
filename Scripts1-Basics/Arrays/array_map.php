<?php

$original = array('<p>Paragraph</p>', '<b>Bold</b>');
$new = array_map('strip_tags', $original);

foreach($original as $news){
	echo $news;
}


// $new is now array('Paragraph', 'Bold');
?>