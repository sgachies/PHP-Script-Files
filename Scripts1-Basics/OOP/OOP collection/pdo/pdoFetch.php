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



//PDO statement class
$sth=$dbh->query("SELECT * FROM page");
$result=$sth->fetchAll(PDO::FETCH_OBJ);
print_r($result);

echo $result[0]->title;
echo '<br>';
echo $result[0]->content;



?>