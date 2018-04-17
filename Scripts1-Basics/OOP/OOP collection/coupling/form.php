<?
//client code
require_once('validate.php');
class Form
{
		public function post($p)
		{
			$this->{$p}=$_POST[$p];
		}
		

}


?>