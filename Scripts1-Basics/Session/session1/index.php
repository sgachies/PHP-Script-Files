<?php
		require 'session.php';
		
		session_start();
		
	
		Session::get('name','number');
		echo Session::destroy();
		Session::display();
		

?>