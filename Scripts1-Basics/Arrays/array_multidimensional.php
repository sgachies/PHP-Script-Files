<?php


$info = array("names"=>"steve ngechu","country"=>"kenya","city"=>"nairobi");

$newInfo = array("age"=>21,"status"=>"single");

$info = array_merge($info,$newInfo);

	foreach($info as $key=>$value)
	{
		echo $key,": ",$value,"<br />";
	}
	echo "<br><br />";
	
	if(array_key_exists("names",$info)&&$info['names']!="")
	{
	echo "The name stored is ",$info['names'];
	echo "<br><br />";
	}else{
	echo "Name does not exist";
	echo "<br><br />";
	}
	
	$citySearch = array_search("kenya",$info);
	echo "The key for the city is ",$citySearch ;
	echo "<br><br />";
	
	print_r(array_keys($info));
	echo "<br><br />";
	print_r(array_values($info));
	echo "<br><br />";
	
	
	$cust1 = array("names"=>"steve","country"=>"kenya","city"=>"nairobi");
	$cust2 = array("names"=>"mike","country"=>"kenya","city"=>"mombasa");
	$cust3 = array("names"=>"ian","country"=>"kenya","city"=>"kisumu");
	
	$cust  = array($cust1,$cust2,$cust3) ;
	print_r(array_values($cust));
	echo "<br><br />";
	
	foreach($cust as $key){
		foreach($key as $keys=>$value){
			echo $keys,": ",$value,"<br/>";
		}
	}
	
	
?>