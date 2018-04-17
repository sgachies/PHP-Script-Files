<?php

class Player

{
		public function __construct()
		{
				echo "Player created";
		}

		
		public function action($type,$dmg)
		{
			$type = strtolower($type);
			//type cast $dmg to integer
			$dmg=(int)$dmg;
			if($type=='attack')
			echo 'attack for $dmg';
			
			else if($type == 'defend')
			echo 'Defending for $dmg';
			
			elseif($type == 'dodge')
			echo 'Attempting to dodge';
			
			else
			echo 'unknown action called';
			
		}
		
		
		public function actio2($type,$dmg)
		{
		
		
		}
}

?>