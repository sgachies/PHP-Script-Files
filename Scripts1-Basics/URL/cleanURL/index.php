<?php

	include 'classes/simpleUrl.php';

	$url=new simpleUrl('/cleanURL');
	
     if( !$url->segment(1) )
		$page = 'home';
	else
		$page=$url->segment(1);
	
	switch($page){
	
		case 'home':
		   echo 'Home page';
		break;
		
		case 'Products':
		   include 'templates/products.php';
		break;
		
		default: //404 page
			echo '404 not found';
		break;
		}

?>