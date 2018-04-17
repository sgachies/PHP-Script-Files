<?php

	$person = array
	(
		'name' => 'Alex',
		'age'  => 24,
		'location' => 'London'
	);
	
//array $person  containing $key=>$value
	echo $person['name'].'<br>';
	echo $person['age'].'<br>';
	echo $person['location'].'<br>';
	
	echo '<pre>'.print_r($person,true).'</pre>';
 

?>