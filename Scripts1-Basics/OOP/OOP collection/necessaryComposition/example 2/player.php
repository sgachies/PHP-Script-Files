<?php

class Player

{
		public function __construct()
		{
				echo "Player created <br>";
		}

		
	
		
		public function action($type,$dmg)
		{
				$action = new Player_Action($this);
				try{
				echo $action->{$type}($dmg);
             }			
				catch (Exception $e)
				{
					echo $e->getMessage();
				}
		}
}

?>