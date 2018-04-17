<?php
	class Animal{

		private $name;
		private $favFood ="Meat";
		
		public static  $nameOfAnimals = 0;
		
		public function __construct($name ="No Name")
		{
			echo "__construct was called". "<br>";
			$this ->setName($name);
			self::$nameOfAnimals++;
		}
		//final key prevents function from being overwritten
		//by any other methods whenever any new class extends  
		//animal class
		public function __destruct(){
			echo "__destruct was called"."<br/>";
			
		}
		
		final public function getName()
		{
			return $this->name;
		}
		
		final public function setName($setName)
		{
			$this->name=$setName;
		}
		
		
		public function makeNoise()
		{
			echo  "Grr"."<br />";
		}
		
		public function favFood()
		{
			echo  "My favourite food is" . $this->favFood."<br />";
		}
		
		public function move()
		{
			echo  "Walk around"."<br />";
		}
		
		
	}
	
	class Dog extends Animal
	{
		public function  __construct($name="No Name")
		{
			parent::__construct($name);
		
		}
		public function  __destruct()
		{
			echo  "__destruct was called";
		}
		public function makeNoise()
		{
			Animal::makeNoise();
			echo "Bark Brk"."<br />";
		}
	
	}
	
	$grover = new Dog("Grover");
	$paul = new Dog("paul");
	$grover -> makeNoise();
	
	$grover ->favFood();
	$grover ->move();
	
	echo Animal::$nameOfAnimals."<br />";
	
	
	
	




?>