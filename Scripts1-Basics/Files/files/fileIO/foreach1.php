<?php


		$customers = file("customers.txt");

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