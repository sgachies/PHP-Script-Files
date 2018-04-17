<?php

	class Store
	{
	
	protected $name;
	protected $id;
	
	
	public function setName($name)
	{
	if(ctype_alnum($name)==true)
	die('You cant do this');
	$this->name = $name;
	}
	public function getName()
	{
	return $this->name;
	}
	}
$store = new Store();
$store->setName('pet store');
echo $store->getName(); 




?>