<?php


$xml=simplexml_load_file('test.xml');

//xml acting like an array
//displaying attributes of xml type i.e. boy
echo '<pre>';

echo $xml->person[0]['type'].'->'.
     $xml->person[0]->name.'->'.
     $xml->person[0]->{'body-weight'}->w1;
echo '<br>';
echo $xml->person[1]['type'].'->'.
     $xml->person[1]->name.'->'.
     $xml->person[1]->{'body-weight'}->w2;
	


?>