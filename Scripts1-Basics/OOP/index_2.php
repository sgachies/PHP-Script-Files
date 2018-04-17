
<?php

class Person{

private $name;

public function setName($name1){
$this->name=$name1;
}
public function getName(){
echo $this->name;
}

}
$object=new Person();
$object->setName("steve ");
$object->getName();

$object1=new Person();
$object1->setName("+ gladys");
$object1->getName();
?>
