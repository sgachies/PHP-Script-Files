<?php


class Test
{       
		
        public $firstname;
	
		public function Hello()
		{
		echo 'Hello';
		}
		
		function __set($name,$value)
		{
		echo "<br> You are going to set a property of $name->$value";
		$this->{$name}=$value;
		}
		
	
	
	
}
$test =new Test();
$test->Hello();
$test->age=12;





