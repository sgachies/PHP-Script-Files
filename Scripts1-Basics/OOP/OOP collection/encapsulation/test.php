
<?php

     //encapsulation hiding data from public
	 class Test
	 {
		private $_name;
		
		public function setName($name)
		{
		$this->_name=$name;
		}
		public function getName()
		{
		return $this->_name;
		}
	}

$test =new Test();
$test->setName('jesse');
echo $test->getName();


?>