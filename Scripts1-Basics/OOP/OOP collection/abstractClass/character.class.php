<?php

//an abstract class cannot be constructed 
//an abstract class cannot be instantiated in the main

abstract class Character

{			

			abstract public function Attack($a,$b);
			abstract public function Defend();
			
			public function Setup($a,$b)
			{
			echo '<br> a= '.$a;
			echo '<br> b= '.$b;
			}
			
}
	
			

?>