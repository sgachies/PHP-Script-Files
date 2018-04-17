<?php


	$countryStr="cuba,spain,india,france,italy";
	$randCountry= explode(",",$countryStr);
	echo $randCountry[0], " ",$randCountry[1], "<br /><br />";
		
	$countryStr2 = implode(",",$randCountry);
	echo $countryStr2, "<br /><br />";

	if(in_array("india" ,$randCountry)) echo "india is in the list";
	echo "<br /><br />";
	
	print_r(array_reverse($randCountry,true));
	echo "<br /><br />";
	
	sort($randCountry,SORT_STRING);
	print_r($randCountry);
	echo "<br /><br />";
	
	 $customers = file("customers.txt");
	 foreach($customers as $customer)
	 {
	 
		list($name,$country,$count,$age) = explode(",",$customer);
		$age = trim($age);

		echo "$name,$country,$count,$age";
		echo "<br /><br />";
		
	 }
	 
	 
	


?>