<?php

class Load{

function view($file_name,$data=null)
		{
		//extract take item in associative array into variables
		if(is_array($data)){
		extract($data);
		}
		include 'views/'.$file_name;
	}
}


?>