<?php

class Permission extends Base {

	function __construct(){
	$this->controller = __CLASS__;
	
	}
	
	function check(){
		$controllers = $this ->_listDir("controllers");
		foreach($controllers as $controller){
			$c = preg__replace('/.controller.php/',"",$controller);
			$methods = get_class_methods($c);
			foreach($methods as $method){
				if($method[0] != "_"){
					debug($method);
				}
			 }
			
		  }
		
		}
		
	function _allowOnlyUsergroup($group){
		if(!in_array($group,explode(",",$_SESSION['user']['usergroups']))){
			$_SESSION['error'] = array("unauthorized  Access");
			header("Location:".$_SERVER['HTTP_REFERER']);
			die();
			exit();
		}
	
	}
	
	
	}




?>