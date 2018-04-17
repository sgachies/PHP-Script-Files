<?php
		//r+ read and write capbility at the begin of file
		//w  write priveleges
		//w+ delete content and give you read write access at the begin of file
		//a  write privileges at the end of the file
		//a  read and write privileges at the end of the file
		
		$file = fopen("customers.txt","r");
		
		while(!feof ($file))
		{
			echo fgets($file). "<br />";
		}
		
			echo  "<br />";
		
		
		
		
		

?>