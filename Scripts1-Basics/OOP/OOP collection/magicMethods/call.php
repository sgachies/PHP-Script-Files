<?php


class Test
{       
		
        public $firstname;
	
		public function Hello()
		{
		echo 'Hello';
		}
		
		function __call($param,$value)
		{
		echo "<br> You are going to process $param->$value";
		print_r($value );
		}
	
	
}
$test =new Test();
$test->SomethingThatDoesntExist('123', '124', '125', '127');





