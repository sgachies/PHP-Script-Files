<?php

class Human extends Character
{
		public function  __construct($hp,$dmg,$armor)
			{
			  
				parent::__construct();
				$this->hp =$hp;
				$this->dmg=$dmg;
				$this->armor=$armor;
			}
}

?>