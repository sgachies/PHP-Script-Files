<?php

class Player
{
		public function __construct(array $info)
		{
		$this->Data=$info;
		}

}

abstract class  Player_Decorator
{
		abstract public function Add($int);
}

class Player_Str_Decorate extends player_Decorator
{
		public function __construct(Player $p)
		{
			$this->Player=$p;
			$this->Player->Data['str']+=25;
		}
		
		public function Add($int)
		{
			$this->Player->Data['str']+=$int;
			
		}
}

class Player_Dex_Decorate
{
		public function __construct(Player $p)
		{
			$this->Player=$p;
			$this->Player->Data['str']+=25;
		}
		
		
		public function Add($int)
		{
			$this->Player->Data['dex']+=$int;
			
		}
		
}



$p=new  Player(array('str'=>10,'dex'=>15));
echo $p->Data['str'];
echo $p->Data['dex'];

echo '<hr />';

$Str = new  Player_Str_Decorate($p);
echo $Str->Player->Data['str'];

$Dex = new  Player_Dex_Decorate($p);
$Dex->Add(55);
echo $Dex->Player->Data['dex'];