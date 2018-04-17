<?php

class Test
{
		public function __construct()
		{
		  
		}
		
		public function Write()
		{
		  echo 'I am writing from test';
		}
		

}


class Foo
{

   public function __construct(Test $a)
   {
   $this->NewObj =$a;
   $this->NewObj->Write();
   }

}
new Foo(new Test);




?>