<?
//validate code
require_once('form.php');
require_once('client.php');

  class Validate
  {
	public function number($p)
	{
		if(!ctype_alnum($p))
		return false;
	}
	
	public function __call($n)
	{
		throw Exception
		("This method doesnot exist:$n");
	}
  
  
  }
?>