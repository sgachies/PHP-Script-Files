<?php


echo '<pre>';

//$xml=simplexml_load_file('test.xml','SimpleXMLIterator');
//print_r($xml);

$xml=file_get_contents('test.xml');
$iterator= new SimpleXMLIterator($xml);
//print_r($iterator);

foreach($iterator as $person)
{
	echo $person->name;
	echo '  ';
	echo $person->age;
	echo '<br />';

}


?>