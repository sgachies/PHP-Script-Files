<?php
require('cupcake.php');
$cupcake = new Cupcake();


$cupcake->Nuts('10')
		->Frosting('chocolate')
		->Sprinkles('200');
		
		
print_r($cupcake->Cupcake);
?>