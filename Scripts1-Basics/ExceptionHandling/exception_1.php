<?php

error_reporting(E_ALL);

	$num1 = 1;
	$num2 = 0;
	
	function error_wrangler($num1,$num2)
		{
			if($num2 == 0)
			{
			throw  new Exception("Can't divide by zero");
			}
			return true;
		
		}

	try
	{
			error_wrangler($num1,$num2);
			echo "$num1 divided by $num2 is". $num1/num2;
	
	}
	catch(Exception $e)
	{
		echo "Error" . $e -> getMessage() . "<br />" .$e -> getFile() . "<br />" . $e -> getLine() . "<br />";
	
	
	}



?>