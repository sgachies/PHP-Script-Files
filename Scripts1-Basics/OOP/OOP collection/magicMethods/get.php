<?php


class Test
{       
		
        public $firstname;
		public $lastname;
		
		public function Hello()
		{
		echo 'Hello';
		}
		
		function __get($param)
		{
		echo "<br> $param does not exist";
		}
	
		
	
}
$test =new Test();
$test->Hello();
$test->firstname;
$test->lastname;
$test->email;
$test->phone;




