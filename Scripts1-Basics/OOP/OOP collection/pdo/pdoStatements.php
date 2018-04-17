<?php
//php database objects
echo '<pre >';
try{
	$dbh = new PDO("mysql:host=localhost;dbname=test",'root','');

}
catch (PDOException $e){
echo $e->getMessage();
}


//PDO statement class
$sth=$dbh->query("SELECT * FROM page");
print_r($sth->fetch());



?>