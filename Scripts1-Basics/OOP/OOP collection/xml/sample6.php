<?php


$xml=simplexml_load_file('test.xml');


echo '<pre>';

foreach($xml->person[0] as $data)

{
echo $data.'<br>';

}