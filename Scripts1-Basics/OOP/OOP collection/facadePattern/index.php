<?php

class Stringify
{
	public function __construct($str)
	{
	$this->str=$str;
	$this->_AddText();
	$this->_AddDigits();
	$this->_AddObject(new Stuff);
	echo  $this->str;
	}
	public function _AddText()
	{
	$this->str .=' | add text ';
	}
	public function _AddDigits()
	{
	$this->str .=' | add Digits: 402 ';
	}
	public function _AddObject(Stuff $stuff)
	{
	$this->str .=$stuff->WriteC();
	}

}
class Stuff
{
		public function WriteC()
		{
				return __CLASS__.  'writing stuff';
		}

}


$x =new Stringify('intro text');


?>