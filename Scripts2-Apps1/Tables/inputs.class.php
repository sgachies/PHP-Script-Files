
<?php
	ini_set('display_errors', 'Off');
	error_reporting(E_ALL);	

	class InputFields
	{
		private $limit;
		private $tableFields;

		public function Inputs()
		{
		if(isset( $_POST['limit']) )
		{
			    $this->limit	 	= 	$_POST['limit'];
			if(isset($_POST['tableFields']))
			{
				$this->tableFields	=   $_POST['tableFields'];
			}
		}
		
		echo "<form action='#' method='post' >";
		for($x=1;$x<=$this->limit;$x++)
		{
			$fields=array($this->tableFields);
			foreach($fields as $field){
			
			echo "field" . $x . "&nbsp&nbsp <input type= ' text ' name=". $field." ><br>";
			}
		}
		if(empty( $_POST['limit'])){
		echo "";
		}
		else{
		echo "<input type='submit' name='submit' id='submit' value='submit' /> </form>";
		}

		}
		
		
		
		
		
		
		
		
		
		
	}
	
	$init = new InputFields();
	$init-> Inputs();

?>