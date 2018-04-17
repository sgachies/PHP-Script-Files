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


$sth=$dbh->prepare("INSERT INTO page(title,content)VALUES(:title,:content)");
$pass=array(':title'=>'Book 1',':content'=>'Novel');
echo $sth->execute($pass);
$pass=array(':title'=>'Book 2',':content'=>'Comic');
echo $sth->execute($pass);
$pass=array(':title'=>'Book 3',':content'=>'fiction');
echo $sth->execute($pass);


?>