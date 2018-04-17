<?php

class Java implements DotSyntax,Compiled

{
		public function  __construct()
		{
		echo 'Java was created';
		$this->UsesDotSyntax();
		
		}
		public function UsesDotSyntax()
		{
		  echo'<hr>';
		  echo 'yes, it looks like it';
		
		}
		public function isCompiled()
		{
		  echo'<hr>';
		  echo 'Yes,it Compiled for jar files';
		
		}


}


?>