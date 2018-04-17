
<?php
//__constructor
//intialize instance variable to some value as soon its object is created
class Person{
private $name;

public function __construct(){
$this->name="simple name";
}
 
public function getName(){
echo $this->name;
}
}
$object=new Person();
$object->getName();


?>
