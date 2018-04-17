<?php


$xml=simplexml_load_file('test.xml');

echo '<pre>';
//print_r($xml);

echo $xml->person[0]->age;
echo $xml->person[0]->name;
echo $xml->person[0]->{'body-weight'};

echo "<br>";

echo $xml->person[1]->age;
echo $xml->person[1]->name;
echo $xml->person[1]->{'body-weight'};
?>