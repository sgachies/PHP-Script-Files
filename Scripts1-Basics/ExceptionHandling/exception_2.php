<?php

error_reporting(E_ALL);

	$num1 = 1;
	$num2 = 2;
	
	class errorWangler extends Exception
	{
		function errorReport()
		{
			$error = "Error" . $this -> getMessage() . "<br />" .$this -> getFile() . "<br />" . $this -> getLine() . "<br />";
			return $error;
		}
			
	}
	
	try 
	{
		if($num2 == 0)
		{
			throw new errorWangler("cant divide  by zero");
		}
		else if($num2 == 1)
		{
			throw new Exception("Dont divide by 1");
		}
		echo "$num1 divide by $num2 is " . $num1/$num2;
	
	}
	
	catch (errorWangler $e)
	{
		echo $e->errorReport();
		//log error to a text file
		//3,means you want the text to be written to a text file
		error_log($e->errorReport(),3,"errorlog.lst");
		die('Something bad happened');
		
	}
	catch(Exception $e)
	{
		echo $e -> getMessage();
	}
	
	




?>