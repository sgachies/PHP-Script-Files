<?php


class Test
{
		function __clone()
		{
		
		echo 'data was passed';
		}
		
		
}
$test =new Test();
//test2 clones the objects state 
//it can be used to login to a file
$test2=clone $test;



