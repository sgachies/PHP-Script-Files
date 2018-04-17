<?php

class User{

		function  addUser($u)
		{
			$db= new DB();
			try{
			$db->insert($u);
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
		}
}

class DB{
		function insert($item)
		{
			$query = mysql_query("insert data");
			if(!$query)
			throw new Exception('The query failed');
		}


}
	$user=new User();
	$user->addUser('jesse');
	





?>