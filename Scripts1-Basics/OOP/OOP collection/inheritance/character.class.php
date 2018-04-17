<?php

class Character
		{
			protected $hp=100;
			protected $dmg=10101;
			protected $armor=120;
			
			protected function __construct()
			{
			echo 'Character was created <br>';
			}
			
			public function Attack()
			{
			    echo  '<u>'.'Dragon character'.'</u><br>';
				echo 'Damage Points ' .    $this->dmg.'<br>';
				echo 'Hit points    ' .    $this->hp.'<br>';
				echo 'Armor Points  ' .    $this->armor.'<br>';
			}
		}
?>