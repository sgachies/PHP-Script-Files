
<?php

class Example{


			public  $item;
			public  $name;
			
			function Sample()  
				{
				$this->Test();	
				}
				
			function Test()  
				{
				echo 'Test'.'</br>';	
				echo $this->item;
				$regular=500;
				echo 'items exceeds '.$regular;
				}
			function Dog()
			{
				echo $regular;
			}

}

//instantiate the class object example
$e=new Example();
//calling the method test
$e->Sample();

?>