<?php

	class Store
	{
	
	protected $name;
	protected $id;
	
	
	public function set($name,$value)
	{

	$this->{$name} = $value;
	}
	public function get($var)
	{
	return $this->{$var};
	}
	//magic function
	public function __get($var)
	{
	echo 'this doesnt exist';
	}
	
	}
	
	class Branch extends Store
	{
	public function __construct(){
	}
	
	}
$branch=new Branch();
$branch->set('name','pet store ');
$branch->set('branchid','4535445');

echo $branch->get('name').'<br>'; 
echo $branch->get('branchid').'<br>'; 
echo $branch->get('eee').'<br>'; 


?>