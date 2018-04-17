<?php

	class Animal
	{
		
		//Accessed by all and make changes
		public  $name;
		private $age;
		const   POUNDID =1234;
		
		
	

		
		public function setAge($setAge)
		{
			$this->age=$setAge;
		}
		public function getAge()
		{
				return $this->age;
		}
		
	
	}

	$cat = new Animal();
	$cat->name="grover";
	$catName = $cat->name;
	
	$cat->setAge(10);

	echo "The cat's name is " .$catName . "<br/>";
	echo "The cat's age is "  .$cat->getAge() . "<br/>";
	

	
	

?>