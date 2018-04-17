<?php

//connect to db
$thisConnect();

}

function _printMessage(){
	//print errors
	$types= array("success","error","warning","info","tip");
	 foreach($types as $type ){
		if(isset($_SESSION[$type]) !empty($_SESSION[$type]) && is_array($_SESSION[$type])){
		  foreach($_SESSION[$type] as $msg){
			$shout = strtoupper($type);
			echo "<div class='notification $type'> <span class='strong'>$shout!</span> $msg</div>";
			}
			unset($_SESSION[$type]);
			
		  
		  }
			
		
		}
	 
	 }


?>