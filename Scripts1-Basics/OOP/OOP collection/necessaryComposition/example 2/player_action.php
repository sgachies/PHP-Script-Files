<?php

class Player_Action

{
		public function __construct(Player $p)
		{
				echo "action called from Player";
		}
		
		public function attack($dmg)
		{
			return "You attacked for $dmg <br>";
		}
		
		public function defend($dmg)
		{
			return "You defended for $dmg <br>";
		}
		
		public function flee($dmg)
		{
			return "You fled <br>";
		}
		
		public function dodge($dmg)
		{
			return "You dodged escaped and took $dmg/5 <br>";
		}
		
		public function __call($method,$arg)
		{
			throw new Exception("Invalid Method $method");
		}
		

}

?>