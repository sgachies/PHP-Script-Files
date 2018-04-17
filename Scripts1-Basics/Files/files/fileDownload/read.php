<h1>Name list</h1>
<?php
	

	$lines=file('acfiles/contacts.csv');
	foreach ($lines as $name){
	echo $name."<br>";
	}

?>