
<?php
//public-used anywhere as long the object is created
//private-Only be used within the class
//protected-Molded,renamed and grabbed  in child class/can be extended
class Calc{


			public  $input;
			public  $input2;
			private  $output;
			
			
			
			function SetInput($int)  
				{
				$this->input=($int);	
				}
			function SetInput2($int)  
				{
				$this->input2=($int);	
				}
			function calculate()  
				{
				$this->output=$this->input*$this->input2;
				
				}	
			function getResult()  
				{
				
				return $this->output;
				}	
}

$calc =new Calc();

$calc->setInput(5);
$calc->setInput2(10);
$calc->calculate();
echo $calc->getResult();
//you can have more than one isnstance of an object in a class i.e.
$calc2 =new Calc();

$calc2->setInput(5);
$calc2->setInput2(20);
$calc2->calculate();
echo '+'.$calc2->getResult();



?>