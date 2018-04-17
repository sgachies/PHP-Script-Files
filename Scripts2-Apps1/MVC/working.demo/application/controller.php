  <?php

//Controller is the coordinator
class Controller{
		public $load;
		public $model; 
		
		function __construct()
		{
			$this->load=new Load();
			$this->model=new Model();
			//determine what page you are
			$this->home();
		}
	
		
		function home()
		{
			$data=$this->model->user_info();
			$this->load->view('someview.php',$data);  
		}

}


?>