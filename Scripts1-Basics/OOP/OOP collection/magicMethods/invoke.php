<?php


class Test
{
//Used when you use an object as a function
		function __invoke($vars)
		{
		
		echo 'You can do that man';
		}
		
		
}
$test =new Test();
$test(1);



