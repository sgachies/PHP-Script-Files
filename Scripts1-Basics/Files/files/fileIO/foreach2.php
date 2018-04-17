<?php

		//error_reporting(E_ALL);
		$file1 = fopen("customers.txt","a");
		
		$newCustomer = "\nRick,123,nakuru,kenya";
		fwrite($file1,$newCustomer);
		fclose($file1);
		
		$customers = file_get_contents("customers.txt");
		$customers = explode("\n",$customers);
		
		foreach($customers as $customer)
		{
			list($name,$street,$city,$state)=explode(",",$customer);
			$state = trim($state);
			
			echo "Name:   " . "$name   <br />";
			echo "Street: " . "$street <br />";
			echo "City:   " . "$city   <br />";
			echo "State:  " . "$state  <br /><br />";
		}
		
		
		
		
		

?>