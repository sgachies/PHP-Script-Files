<?php
//php database objects
echo '<pre >';
try{
	$dbh = new PDO("mysql:host=localhost;dbname=test",'root','');

}
catch (PDOException $e){
echo $e->getMessage();
}

//PDO class
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$dbh->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);


?>