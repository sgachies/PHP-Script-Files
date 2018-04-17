<?php


class Test
{
		function __construct()
		{
		
		echo 'item created ';
		}
		
	  	function __destruct()
		{
		echo ' : : item destroyed';
		}
		
}
$test =new Test();



