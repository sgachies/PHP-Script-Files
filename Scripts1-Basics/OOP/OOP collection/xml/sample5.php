<?php


$xml=simplexml_load_file('test.xml');


echo '<pre>';

$xml->person[0]->addChild('height','500cm');
echo $xml->asXML();

?>